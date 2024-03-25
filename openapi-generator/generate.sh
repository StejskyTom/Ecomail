#!/bin/bash

## >> Configuration
# Relative to project root
openApiSpecFile="openapi-spec/ecomail.yaml"
openApiGeneratorConfig="openapi-generator/config.yaml"

clientBuildDir=".build/client"
buildLogFile=".build/openapi-generator.log"

targetDir="dist"
## << Configuration

# Docker workdir
dockerWorkdir="/data"

if [ ! -f "${openApiSpecFile}" ]; then
    echo "Error: Openapi specification file '${openApiSpecFile}' doesn't exists."
    exit 1
fi

# Clean directories
rm -r "${clientBuildDir}" "${targetDir}"
mkdir -p "${clientBuildDir}"
mkdir -p "${targetDir}"

# Generate API client
docker run --rm --user "$(id -u)":"$(id -g)" -v "${PWD}:${dockerWorkdir}" openapitools/openapi-generator-cli generate --skip-validate-spec \
   -i "${dockerWorkdir}/${openApiSpecFile}" \
   -g php \
   -o "${dockerWorkdir}/${clientBuildDir}" \
   -c "${dockerWorkdir}/${openApiGeneratorConfig}" \
   --global-property apiTests=false,modelTests=false

# Copy files to dist directory
cp -r "${clientBuildDir}/README.md" "${clientBuildDir}/lib" "${clientBuildDir}/docs" "${targetDir}"

# Add ability to dit base path via host in Configuration object for sandbox
# Change default $host from 'https://api.rb.cz' to 'https://api.rb.cz/rbcz/premium/api'
# Edit all endpoint and remove '/rbcz/premium/api' prefix from $resourcePath variable.
# find "${targetDir}" -type f \( -name '*.php' -o -name '*.md' \) -exec sed -i 's=/rbcz/premium/api==g' {} \;
# find "${targetDir}" -type f \( -name '*.php' -o -name '*.md' \) -exec sed -i 's=https://api.rb.cz=https://api.rb.cz/rbcz/premium/api=g' {} \;
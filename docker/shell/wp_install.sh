#!/bin/bash
# SCRIPT_DIR=$(dirname "${BASH_SOURCE[0]}")
SCRIPT_DIR=$(dirname "${0}")

INSTALL_DIR="${WORKDIR}/public"

mkdir -p "${INSTALL_DIR}"
wget -O "${INSTALL_DIR}/wordpress.tar.gz" https://wordpress.org/latest.tar.gz

echo "Extracting Wordpress into ${INSTALL_DIR}"
tar --strip-components=1 --directory "${INSTALL_DIR}" -xzf "${INSTALL_DIR}/wordpress.tar.gz"
echo "Downloaded and extracted Wordpress"

rm "${INSTALL_DIR}/wordpress.tar.gz"
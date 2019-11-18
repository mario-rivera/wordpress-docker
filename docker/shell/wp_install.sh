#!/bin/bash
# SCRIPT_DIR=$(dirname "${BASH_SOURCE[0]}")
SCRIPT_DIR=$(dirname "${0}")
INSTALL_DIR="${WORKDIR}/public"
MARIADB_DIR="${WORKDIR}/wordpress/mariadb"

# Make install dir and download wordpress
mkdir -p "${INSTALL_DIR}"
wget -O "${INSTALL_DIR}/wordpress.tar.gz" "https://wordpress.org/wordpress-${WP_VERSION}.tar.gz"

# Extract wordpress
echo "Extracting Wordpress into ${INSTALL_DIR}"
tar --strip-components=1 --directory "${INSTALL_DIR}" -xzf "${INSTALL_DIR}/wordpress.tar.gz"
echo "Downloaded and extracted Wordpress"

# Remove tar
rm "${INSTALL_DIR}/wordpress.tar.gz"

# Copy wp config if one is available
if [ -f "$WORKDIR/wordpress/wp-config-${WP_VERSION}.php" ]; then
    cp "$WORKDIR/wordpress/wp-config-${WP_VERSION}.php" "$INSTALL_DIR/wp-config.php"
    echo "Copied wp-config file"
fi

# Create a local env file (for the main docker-compose to work it does not have to be filled)
if [ ! -f "$WORKDIR/.env.local" ]; then
    touch "$WORKDIR/.env.local"
fi

# Create a directory for mariadb (to make data persistent between container recycling)
if [ ! -d "${MARIADB_DIR}" ]; then
    mkdir -p $MARIADB_DIR
    echo "Created mariadb data dir"
fi

echo "Setting permissions for ${MARIADB_DIR}"
chmod 777 $MARIADB_DIR
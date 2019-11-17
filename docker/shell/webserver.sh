#!/bin/bash
SCRIPT_DIR=$(dirname "${BASH_SOURCE[0]}")
# SCRIPT_DIR=$(dirname "${0}")

# # check database host availability
$SCRIPT_DIR/wait-for-it.sh "${MYSQL_HOST}:3306" -s -t 40
retval=$?

# # migrate database if host is available
# if [ $retval -eq 0 ]; then
#   php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration 1>&2
#   retval=$?

#   if [ $retval -ne 0 ]; then
#     exit $retval
#   fi
# fi

# start supervisor
supervisord -n -c /etc/supervisord.conf
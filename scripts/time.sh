#!/bin/sh

# Script to collect data
# and put the data into outputfile

CWD=$(dirname $0)
CACHEDIR="$CWD/cache/"
OUTPUT_FILE="${CACHEDIR}time.txt"
SEPARATOR=' = '

# Skip manual check
if [ "$1" = 'manualcheck' ]; then
	echo 'Manual check: skipping'
	exit 0
fi

# Create cache dir if it does not exist
mkdir -p "${CACHEDIR}"

# Business logic goes here
timezone=$(/usr/sbin/systemsetup -gettimezone | awk '{print $NF}')
# Output data here
echo "timezone${SEPARATOR}$timezone" > ${OUTPUT_FILE}

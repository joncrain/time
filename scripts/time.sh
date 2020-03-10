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
networktime_status=$(/usr/sbin/systemsetup -getusingnetworktime | awk '{print $NF}')
networktime_server=$(cat /etc/ntp.conf | awk '{print $NF", " }' | tr -d '\n')
networktime_server=${networktime_server%?}
autotimezone=$(defaults read /Library/Preferences/com.apple.timezone.auto.plist Active)
# Output data here
echo "timezone${SEPARATOR}${timezone}" > ${OUTPUT_FILE}
echo "networktime_status${SEPARATOR}$networktime_status" >> ${OUTPUT_FILE}
echo "networktime_server${SEPARATOR}${networktime_server%?}" >> ${OUTPUT_FILE}
echo "autotimezone${SEPARATOR}${autotimezone}" >> ${OUTPUT_FILE}

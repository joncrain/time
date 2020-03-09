#!/bin/bash

# time controller
CTL="${BASEURL}index.php?/module/time/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/time.sh" -o "${MUNKIPATH}preflight.d/time.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/time.sh"

	# Set preference to include this file in the preflight check
	setreportpref "time" "${CACHEPATH}time.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/time.sh"

	# Signal that we had an error
	ERR=1
fi

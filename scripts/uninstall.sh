#!/bin/bash

# remove old time script
rm -f "${MUNKIPATH}preflight.d/time.sh"

# Remove time script
rm -f "${MUNKIPATH}preflight.d/time"

# Remove time.txt file
rm -f "${MUNKIPATH}preflight.d/cache/time.txt"

#!/bin/bash
#(chmod +x file.command ) make the file executable
cd "$(dirname "$(type -p "$0")")"
compass watch

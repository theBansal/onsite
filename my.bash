#!/bin/bash
count=$(echo shuf -i 0-9 -n 1);
curl --data "count=$count" localhost/9000.php



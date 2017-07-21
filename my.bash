#!/bin/bash
count=$(echo $RANDOM);
curl --data "count=$count" localhost/9000.php



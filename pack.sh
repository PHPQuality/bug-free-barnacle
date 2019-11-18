#!/usr/bin/env bash

tar --exclude='result.tar.gz' --exclude='phpunit' --exclude='.vagrant/' -czf result.tar.gz .

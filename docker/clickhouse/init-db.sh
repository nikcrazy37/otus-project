#!/bin/bash
set -e
clickhouse client -n <<-EOSQL
    CREATE TABLE IF NOT EXISTS default.fluentd (time DateTime(), tag String, data String) ENGINE = MergeTree ORDER BY time;
EOSQL
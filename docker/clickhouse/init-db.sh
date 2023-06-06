#!/bin/bash
set -e
clickhouse client -n <<-EOSQL
    SET allow_experimental_object_type = 1;
    CREATE TABLE IF NOT EXISTS default.fluentd (time DateTime(), tag String, data String) ENGINE = MergeTree ORDER BY time;
EOSQL
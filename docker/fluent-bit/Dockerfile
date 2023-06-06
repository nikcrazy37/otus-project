FROM fluent/fluent-bit

RUN apt-get update && apt-get install -y \
    git; \
    mkdir -p fluent-bit-clickhouse; \
    chmod 777 fluent-bit-clickhouse; \
    git clone https://github.com/boxyhq/fluent-bit-clickhouse; \
    cd fluent-bit-clickhouse; \
    go build -buildmode=c-shared -o out_clickhouse.so out_clickhouse.go; \
    bin/fluent-bit -e /fluent-bit-clickhouse/out_clickhouse.so -i cpu -o clickhouse;

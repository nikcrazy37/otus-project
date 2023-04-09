FROM fluent/fluentd:edge-debian
#FROM fluent/fluentd:edge-debian-arm64
#FROM fluent/fluentd:v1.14.6-1.1
USER root
#RUN gem install fluent-plugin-clickhouse; \
#    gem install click_house



RUN apt-get update && apt-get install -y \
    git; \
    gem install click_house; \
    mkdir -p fluent-plugin-clickhouse; \
    chmod 777 fluent-plugin-clickhouse; \
    git clone "https://github.com/kumagi/fluent-plugin-clickhouse"; \
    cd fluent-plugin-clickhouse; \
    gem build fluent-plugin-clickhouse.gemspec; \
    gem install fluent-plugin-clickhouse;
#    gem cleanup clickhouse; \
#    gem uninstall clickhouse; \








#RUN gem install fluent-plugin-sql; \
#    gem install clickhouse-activerecord


#RUN apt-get update && apt-get install -y \
#    git; \
#    mkdir -p fluent-plugin-sql; \
#    chmod 777 fluent-plugin-sql; \
#    git clone "https://github.com/zamanimehdi/fluent-plugin-sql"; \
#    cd fluent-plugin-sql; \
#    gem build fluent-plugin-sql.gemspec; \
#    gem install fluent-plugin-sql; \
#    gem install activerecord; \
#    cd ../activerecord-import; \
#    gem build activerecord-import.gemspec; \
#    gem install activerecord-import; \
#    gem install clickhouse-activerecord


#USER fluent
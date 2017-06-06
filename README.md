# bewamo

This is the domain logic of Bewamo

## Update database
```
bin/doctrine orm:schema-tool:update --force --dump-sql
```

## Running e2e tests
From the vagrant box run:
```
bin/behat --profile=e2e
```

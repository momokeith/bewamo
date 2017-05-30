# bewamo

This is the domain logic of Bewamo

## Install roles
```
ansible-galaxy install --roles-path tools/ansible/playbooks/roles -r  tools/ansible/requirements.yml
```

## Update database
```
bin/doctrine orm:schema-tool:update --force --dump-sql
```

## Running e2e tests
```
bin/behat --profile=e2e
```

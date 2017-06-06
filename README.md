# bewamo

This is the domain logic of Bewamo


## Setting up the local environment

### Requirements
````
ansible >= 2.2.3.0
Vagrant >= 1.9.5
VirtualBox >= 5.1.22 r115126
````
### Steps
````
git clone https://github.com/momokeith/bewamo.git
cd bewamo-api
git checkout develop
cd tools/vagrant
vagrant up --provision
````

## Update database
```
bin/doctrine orm:schema-tool:update --force --dump-sql
```

## Running e2e tests
From the vagrant box run:
```
bin/behat --profile=e2e
```

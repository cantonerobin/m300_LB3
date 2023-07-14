# Docker
## .env
**[.env](../mysql\.env)**
I have collected all variables that occur more than once in this .env file. This makes it easy to change the password, for example, without having to search through all the files.
This .env file is included in all Dockerfiles as well as in the docker-compose.yml file. The index.php file then reads the values from the environment variables.

## Dockerfiles
**[Apache Dockerfile](../php\Dockerfile)**

This is a simple Dockerfile, all we do is to install the mysql client packages and change the user to www-data for security reasons.

**[Mysql Dockerfile](../mysql\Dockerfile)**

Here, the variables are first imported from the .env file and then set as environment variables. Then 2 scripts are copied and given the execute permission. 
These scripts fill the database with sample data at the first start.
Then the user is adapted, again for security reasons.

## docker-compose
**[docker-compose.yml](../docker-compose.yml)**

I used this file for testing purposes. Later I realised that the Vagrant box of Ubuntu is too old to install the compose plugin. Therefore, I simply reformulated the docker-compose file to ADHoc commands at the end. Read more in the Vagrant part of the documentation.

### Mentionable
In order to increase security, I have taken some precautions.

**Resources limitation**
For each container, the maximum number of CPU cores as well as the released RAM is specified.

**Network segmentation**
2 networks are created. This allows the database and the apache container to be isolated.

*Frontend*
Only the nginx proxy and the PhpMyAdmin container are in this network.

*Backend*
In this network are all containers.

**ReadOnly Volume mount**
Where possible I have set this up, specifically in the volume mount of the nginx.conf file.
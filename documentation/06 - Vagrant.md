# Vagrant
**[Vagrantfile](../vagrant\Vagrantfile)**

For the base setup I have used the same Vagrantfile as i have in the LB2. In addition, I wanted to install the docker compose plugin. This did not work because the Vagrant box has an Ubuntu image that is too old and is no longer supported. Instead of making a hacky backport, I decided to rewrite the docker compose file into ADHoc commands and store them directly in the Vagrant file.

Because I now have significantly more containers, I have allocated more resources to the VM.
Because the images are stored in the public repo, I can download them directly here.

## Logs

**[vagrant up](\logs\vagrant_up.log)**



Here are several log files and screenshots to show that everything is working.


***The Log Files can be accessed in the "Logs" Folder.***

# Github Action
| Test No. | Initial State | Input | Expected Output | Actual Output | Pass/Fail |
|----------|---------------|-------|-----------------|---------------|-----------|
|   1       |  The main branch exists with the Dockerfile and Github Action configured            |   Code gets pushed to the main branch     |        GitHub Action starts to run         |       GitHub Action runs        |     Pass      |
|   2       |    The main branch exists with the Dockerfile and Github Action configured           |  Code gets pushed to the main branch     |     Github action runs, builds and pushes the Image to the DockerHub registry            |   Github action runs, builds and pushes the Image to the DockerHub registry            |      Pass     |

# vagrant
| Test No. | Initial State | Input | Expected Output | Actual Output | Pass/Fail |
|----------|---------------|-------|-----------------|---------------|-----------|
|    1      |     Clone the repository git@github.com:cantonerobin/m300_CI-CD.git to a win 10/11 machine which has vagrant and virtual Box installed          |   vagrant up    |        Vm does get created and starts with the 4 docker container running         |    Vm does get created and starts with the 4 docker container running           |   Pass        |
|    2      |      docker containers are running inside the VM         | open Webbrowser (Chrome/Firefox) and open http://192.168.55.100      |    Access denied             |     Access denied          |    Pass       |
|    3      |      docker containers are running inside the VM         | open Webbrowser (Chrome/Firefox) and open http://192.168.55.100:8080      |    PhpMyadmin gets served             |     PhpMyadmin gets served served          |    Pass       |
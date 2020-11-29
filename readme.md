# PHP, MySQL, Docker and Debug

This is a small project to demo how to debug PHP in `Visual Studio Code`  
against PHP/MySQL set up via Docker containers.  

## Build and Run

To build Docker images:
```
docker-compose build
```

To start containers:
```
docker-compose up
```

Use `CTL+C` to stop all containers, or run `docker-compose down` inside  
project folder.

## The Demo App

Navigate to `http://localhost:6080` to show all the `notes` in DB.  
There should be none initially. Go to `http://localhost:6080/new-note.php`  
to add new note.

The `launch.json` under `.vscode` is for `Visual Studio Code`. This config  
file allows you to debug the PHP code in this project. You may need to  
install `PHP Debug` extension for VSC first.

A special hostname `host.docker.internal` is set in `docker-compose.yml`  
for `XDEBUG`. This hostname works for `Windows` and `MacOS` but likely  
not for Linux, for which You might need to use `172.17.0.1` or just your  
local IP address.

Select `Run -> Start Debugging` in VSC, then set breakpoints in PHP files  
and access them in browser to see breakpoints hit.

## Caveat

* The way `MySQL` is setup in Docker in this project is for development  
only. It's **NOT** secure!
* To totally reset the database, you'll likely need to remove directory  
`data` before rebuilding Docker images with `docker-compose build`.

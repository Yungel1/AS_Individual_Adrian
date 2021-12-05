# AS_Individual_Adrian

Cada una de las cinco carpetas corresponde a una tarea diferente, por lo que se deberán ejecutar de manera individual para que no haya riesgo de 'colisiones'.

A continuación se va a mostrar como ejecutar cada una de las tareas. Se supondrá que el usuario se encuentra dentro de cada una de las carpetas a la hora de ejecutar los comandos.

### docker

```
sudo docker-compose up --build -d
```

Se podrá acceder a la web mediante el puerto 80.

### volumenes

```
sudo docker-compose up --build -d
```

Se podrá acceder a la web mediante el puerto 80. La carpeta donde se guarda la información y los datos de la base de datos se encuentra inicialmente vacía.

### kubernetes

```
kubectl apply -f .\apache-deployment.yml
kubectl apply -f .\loadbalancer-service.yml
kubectl apply -f .\mysql-deployment.yml
kubectl apply -f .\mysql-service.yml
```

Se podrá acceder a la web mediante la EXTERNAL-IP proporcionada por el loadbalancer-service accediendo al puerto 80 de la misma.

### persistencia_kubernetes

```
kubectl apply -f .\apache-deployment.yml
kubectl apply -f .\loadbalancer-service.yml
kubectl apply -f .\mysql-service.yml
kubectl apply -f .\volumen_persistente.yml
kubectl apply -f .\mysql-deployment.yml
```

Se podrá acceder a la web mediante la EXTERNAL-IP proporcionada por el loadbalancer-service accediendo al puerto 80 de la misma.

### vagrant

```
vagrant up
```

Requiere tener instalada VirtualBox. Se podrá acceder a la web mediante el puerto 80.

## Docker Hub

Se han subido a Docker Hub las imágenes creadas mediantes los Dockerfile del apartado de docker:

mysql: https://hub.docker.com/repository/docker/yungel1/mysql_as

Se han subido dos imágenes diferentes para docker y para kubernetes de php/apache. La razón es que al hacer el php para docker, el 'servername' contenía una '_', carácter el cual no está permitido a la hora de definir el nombre de un servicio en kubernetes, por lo que se tuvo que crear una imagen distinta para adaptarla a kubernetes, simplemente cambiando el nombre de una variable ('servername') del archivo php para que no diese ningún problema.

php/apache (docker): https://hub.docker.com/repository/docker/yungel1/php-apache_as

php/apache (kubernetes): https://hub.docker.com/repository/docker/yungel1/apache_kubernetes_as

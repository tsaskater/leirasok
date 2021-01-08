<style type="text/css">
  body {
    background-color: #adf7c1;
  }
</style>

#  Docker script használata:

  #### Feltelepíti a szükséges programokat és csomagokat.
  
  A [script](https://github.com/tsaskater/leirasok/blob/master/Ubuntu/Scriptek/Docker/szkript) futása közben leklónózza az előre elkészített repositorymat
  
  `git clone https://github.com/tsaskater/docker`
  
  belép ebbe
  
  `cd docker`
  
  felépíti és futtatja a benne lévő Dockerfile-t
  
  ```
  docker build -t webserver-image:v1 .
  
  docker run -d -p 80:80 webserver-image:v1
  ```
  >A script tageli a docker imaget `webserver-image:v1`-re enélkül automatikusan **generált** nevet kapna
  
  
  

## A vizsgán változhat

 #### Az **index.html** file tartalma.

 #### Ezt a script kiadásának útvonala/docker mappában változtathatjuk az alábbi módon:

   1. Az **index.html** file tartalmának szerkesztése
   
   2. `docker stop [név]` 
   >docker konténer leállítása során a neve generált ezért tabolni kell
   
   3. `docker rmi -f webserver-image:v1`
   
   4. `docker build -t webserver-image:v1 . `
   
   5. `docker run -d -p 80:80 webserver-image:v1 `
   

## Docker hasznos parancsok:
  
  * `docker ps`
  >listázza a futó konténereket

  * docker rmi -f imagenév 
  >törli az adott imaget ***tabolni lehet*** a script tageli `webserver-image:v1`-re
  
  * `docker start [név]`
  >docker konténer indítása (a neve **generált** ezért tabolni kell)
  
  * `docker stop [név]`
  >docker konténer leállítása (a neve **generált** ezért tabolni kell)
  
  * `docker rm [név]`
  >törli a megállított konténert (a neve **generált** ezért tabolni kell)
  ***

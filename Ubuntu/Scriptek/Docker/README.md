  [Docker script használata:]

  Feltelepíti a szükséges programokat.
  
  A script futása közben leklónózza az előre elkészített repositorymat
  
  (git clone https://github.com/tsaskater/docker)
  
  belép ebbe (cd docker)
  
  megfuttatja a benne lévő Dockerfile-t

[A vizsgán változhat]

Az index.html file tartalma.

Ezt a script kiadásának útvonala/docker mappában változtathatjuk az alábbi módon:

   Az index.html file tartalmának szerkesztése
   
   docker stop név //docker konténer leállítása a neve generált ezért tabolni kell
   
   docker rmi -f webserver-image:v1
   
   docker build -t webserver-image:v1 .
   
   docker run -d -p 80:80 webserver-image:v1
   

[Docker hasznos parancsok:]
  
  docker ps //listázza a futó konténereket

  docker rmi -f imagenév //törli az adott imaget tabolni lehet a script tageli webserver-image:v1-re
  
  docker start név //docker konténer indítása a neve generált ezért tabolni kell
  
  docker stop név //docker konténer leállítása a neve generált ezért tabolni kell
  
  docker rm név //törli a megállított konténert a neve generált ezért tabolni kell
  

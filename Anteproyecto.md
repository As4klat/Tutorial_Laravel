
# Fuerzas del Alba

Proyecto realizado por ***Alejandro Gamaza Martínez***

1. Introducción  
 1.1 Causa
2. Finalidad
3. Objetivo
4. Medios hardware y software
5. Planificación

---

### 1. Introdución

Mi proyecto sera la realización de una pagina web donde se podra ver la información de tu propia cunta del juego Guild Wars 2 donde este ofrece unas series de API para poder ver los datos que esto manejas. Mi idea es darle al usuario la capacidad de poder registrarse en el gremio que tenemos en el juego a través de esta web y mantenerse informado tanto de las novedades de las actualizacion del jeugo como del gremio.

No solamente será informatico, tambien se publicaran datos extraidos del juego cuando se hagan misiones en zonas especificas para que cada usuario pueda consultar su avance en estas.

#### 1.1 Causa

La idea vino de una web ya existente donde puedes ver datos de tu cuenta [gw2efficiency] pero investigando ninguna gestiona un gremio, no hay una web donde puedas crearte una cuenta y solicitar entrar al gremio del juego. Además sera algo personal y que se va a usar.

---

### 2. Finalidad

La finalidad del proyecto es ofrecer a los jugadores y principalmente miembros de gremio un lugar web donde puedan ver su progreso en el juego e información respectivo a este sin tener que entrar en el. Será beneficioso tanto para los jugadores como para los administradores del gremio.

Visualizacion de ejemplo ([gw2efficiency])

![gw2cuenta]

Como se puede ver en la imagen tengo informacion a mi cuenta haciendo uso de una API key que te ofrece el juego. Mi idea es realizar una web que haga uso de esa API key para ver informacion relacionada a nuestro clan y otros datos.

---

### 3. Objetivo

Cuando la web este apunto los usuarios podran conocer nuestro clan y soliciar entrar en el a través de un registro, luego una vez dentro podras ver las noticias sobre los eventos que se vayan a realizar y tambien de manera publica (sin necesidad de tener una cuenta) poder ver las notas de actualización del juego.

---

### 4. Medios hardware y software

El apartado técnico sera el más problematico ya que en el momento de producción seguramente tengo que modificar ciertos puntos escritos en este documento. Por este motivo estas herramientas seran una extimación.

***Se usara:***

![django]

Como base fundamental de todo el proyecto se hará uso del framework django visto en clases ya que me parece una herramienta muy versátil y se le podrá sacar provecho.

![gw2apimg]

Obviamente para todo este proceso se usara la API del juego que se podra encontrar en [gw2 wiki]

* Solicitud de autorización: `Authorization: Bearer [api key]`
* Parametro de consulta *access_token*: `?access_token=[api key]`

![nodejs]

Usare node ya que es requerido para usar la API

Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor (pero no limitándose a ello) basado en el lenguaje de programación JavaScript, asíncrono, con E/S de datos en una arquitectura orientada a eventos.

![bootstrapimg]

Para el tema estético usare [bootstrap] ya que quiero evitar en la medida de lo posblie tocar codigo css a mano.

---

### 5. Planificación

Mi idea es primero aprender todo lo referente a la API

[gw2efficiency]: https://gw2efficiency.com/
[gw2cuenta]: /img/Captura.PNG
[django]: /img/django.png
[gw2apimg]: /img/gw2apimg.png
[gw2 wiki]: https://wiki.guildwars2.com/wiki/API:Main
[nodejs]: /img/nodejs.png
[bootstrapimg]: /img/bootstrap.png
[bootstrap]: https://getbootstrap.com/
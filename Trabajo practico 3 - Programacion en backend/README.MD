
# Introducción

Al llegar a esta práctica nos encontramos con diseños que no son interactivos. El desafío de este TP
es poder servir todo el contenido procesandolo con código dinámico. La elección de PHP es en parte
arbitraria (hay que elegir una de las decenas de opciones que hay en la industria), pero a su vez es
cómoda de cara a la integración con el contenido de frontend.

El proyecto a partir de este TP debe ser MVC: Vista genera el código de salida al cliente, Controlador
procesa peticiones, llama a modelos e invoca la Vista que corresponda, Modelo impacta en el medio
de persistencia elegido.

No es necesario en este TP que el proyecto haga persistencia real (eso será parte de un TP posterior).
Esto no impide que el modelo sea construido, solo que no se generen las sentencias ni se conecte
ningún motor.

## Consignas

1.Generar un ruteador en el backend que permita navegar todos los links del sitio.

2.Implementar el proyecto de la forma vista en las prácticas (Vistas y Controladores,
uso de librerías via Composer, Orientación a Objetos donde sea necesario).

3.Hacer que los forms se procesen vía POST y se hagan validaciones en el lado del
servidor.

  a. Las validaciones de Backend deben ser consistentes con las validaciones
que se implementarán en el Frontend.

4.Agregue al formulario un campo de tipo “archivo” que ofrezca la posibilidad de
adjuntar una imagen que sea de un estudio clínico en particular. Solo importa que se
pueda enviar el archivo y ser recibido de forma adecuada en el Backend, además de
validar el formato en ambos lados.

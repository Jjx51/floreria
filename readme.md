# Florería 

## Descripción general del proyecto.
Este proyecto servirá para llevar la gestión de una florería que estará vendiendo arreglos florales por una aplicación móvil tanto en ios como en android pero para poder llevar el control de sus pedidos y de sus entregar se maneja un sistema interno que es este.
En el proyecto el usuario captura un nuevo pedido ya sea que haya sido pedido a través de la aplicación , una venta en la sucursal o incluso por teléfono. Una vez registrado el pedido y la venta los arreglos que tengan que ser creados pasaran a una vista donde el usuario repartidor se encargara de ver cuales son los pedidos que tiene que realizar e ira marcando como va su avance para que el usuario repartidor sepa como va el avance de la construcción de los arreglos. Cuando el florista ha terminado de hacer los arreglos los marca como listos con opción para mandar al almacén o para listo para entrega. Si se marca como listo para entrega aparece automáticamente en la pestaña del repartidor donde el repartidor podrá ver todos los pedidos que tiene que entregar durante el día durante 3 bloques de tiempo.
El usuario administrador tendrá acceso ademas a los reportes de ventas , de merma seleccionando por periodo de tiempo. 

## Tipos de usuarios
El sistema solo contará con dos tipos de usuarios 
* User -> Que sera el tanto el florista como el repartidor.
* Admin -> El dueño del negocio.

## Usuario 
**Florista**
El usuario florista cuenta con una vista donde van a aparecer todas los arreglos florales que tiene que crear. Los especiales serán marcador por un borde de color amarillo para distinguirlo de los demás. Cada arreglo contará con toda la información que necesita el florista para hacer los arreglos y aquí mismo tendrá la opción de ir marcando cuantos arreglos del total lleva creados. Una vez que ha terminado de crear todos los arreglos tendrá la opción para mandar a almacén o mandarlos para que el repartidor los entregue.

**Repartidor**
La vista de repartidor cuenta con 3 bloques: 
* Bloque 1 : 8:00 - 12:00
* Bloque 2 : 12:00 - 16:00
* Bloque 3 : 16:00 -m20:00

Se crea de esta forma para una mayor gestión y priorizar de la entrega de los pedidos excepto aquellos que sean especiales que de la misma forma serán marcados con el color amarillo para distinguirlos.
El repartidor podrá ir cambiando los estados de los pedidos para que los demás usuarios del sistema sepan como va la entrega de los pedidos.En caso de no poder ser entregado un arreglo entonces se marcara como "Entrega fallida" y se abrirá un cuadro de dialogo para dejar una nota.
Al final del día los arreglos desaparecerán de los bloques excepto los que son especiales que aun no han sido entregados y los que están marcados como entregas fallidas.

## Usuario administrador

### Panel de usuarios
Desde el panel de usuarios el cliente podrá crear las cuentas que estarán usando sus empleados con la opciones de: 
* Visualizar todas las cuentas
* Crear cuentas
* Editar cuentas
* Eliminar cuentas

### Reportes
El usuario administrador podrá seleccionar un intervalo de tiempo para poder ver sus reportes donde podrá escojer:
* Reporte de venta
* Reporte de merma
* Reporte de venta y merma

Los 3 mencionados anteriormente se generaran en un pdf para poder ser capaces de imprimir o guardar en una computadora.

## Ventana principal
En la parte principal existirá un campo input donde se ingresa un código que es el que estará automáticamente asociado con algún producto en el sistema. Después de aquí el usuario puede escojer si el producto sera: 
* Venta en tienda
* Pedido 
* Para almacén

Dependiendo de la opción que escoja se abrirá un formulario con diferentes campos. En caso de ser pedido se pedirá la información del cliente así como detalles del arreglo para que a la hora de dar guardar se mande automáticamente a la vista de florista para que lo cree.

## Inventario
Se muestra una tabla con todos los productos con los que cuenta el sistema así como su existencia y una imagen del producto.

## Merma 
La vista de merma mostrara todos los productos y permitirá agregar merma de los productos para descontarla automáticamente del sistema.






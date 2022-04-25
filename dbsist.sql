drop schema if exists public cascade;
create schema public;
create extension if not exists pgcrypto;

create table empresas(
    idempresa SERIAL NOT NULL PRIMARY KEY,
    empresa varchar default null,
    descripcion varchar default null,
    gerente varchar default null,
    telefono integer default null,
    direccion varchar
    /*type enum('programado', 'ejecutado')*/
);

 
insert into empresas (empresa, descripcion, gerente, telefono, direccion)  values
('ENAUTO', 'Empresa nacional automotriz','coronel',282653,'prado'),
('UERH', 'Empresa nacional','coronel',2826053,'prado');



create table productos(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÂ³n  y ComercializaciÃƒÂ³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÂ³n de modulos operacionales', 'Descripcion2', 'global');
   



create table prog_anual_prod(
	idprog_anual_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado integer,
	anho integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_anual_prod(idempresa, idproducto, programado, anho) values 
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);
Create table mprog_anual_prods();

create table prog_anual_ing(
	idprog_anual_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado1 integer,
	anho1 integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_anual_ing(idempresa, idproducto, programado1, anho1) values
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_mes_prod(
	idprog_mes_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado_mes	integer,
	mes varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_mes_prod(idempresa, idproducto, programado_mes , mes) values 
(2, 2, 3577,'enero'),
(1, 2, 233415, 'marzo');

create table prog_mes_ing(
	idprog_mes_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado_mes1	money,
	mes1 varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_mes_ing(idempresa, idproducto, programado_mes1, mes1) values
(2, 2, 23577.2,'marzo'),
(1, 2, 2334.5, 'enero');

create table presupuestogastado(
  	grupo varchar,
    presupuesto_anual decimal default null,
    fecha date, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null
);

insert into presupuestogastado (grupo, presupuesto_anual, fecha)  values
('SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
('SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
('MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
('ACTIVOS REALES', 568760.00,'11-12-2021'),
('ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
('SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
('IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado;



create table ejecutado_prod(
    idproducto1 SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    idproducto integer,
    idprog_anual_prod integer,
    idprog_mes_prod integer,
    cantidad_ejecutada integer,
    cumplimiento_porcentaje decimal,
    total_prod_mes integer,
    porcentaje_cumplimiento decimal,
    porcentaje_uso_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_prod) references 	prog_anual_prod(idprog_anual_prod),
    foreign key (idprog_mes_prod) references 	prog_mes_prod(idprog_mes_prod),
    foreign key (idproducto) references productos (idproducto)
);

insert into ejecutado_prod(idempresa,	idproducto,	idprog_anual_prod,	idprog_mes_prod, cantidad_ejecutada, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from ejecutado_prod;

CREATE TABLE proyeccion_ingresos(
    idproyeccion_ingresos serial not null primary key,
    idempresa integer,
    idproducto integer,
    idprog_anual_ing integer,
    idprog_mes_ing integer,
    --me_product varchar,
    cantidad_ejecutadames decimal,
    porcentaje_mes decimal,
    acumulado_mes decimal,
    porcentaje_ejecucion_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_ing) references 	prog_anual_ing(idprog_anual_ing),
    foreign key (idprog_mes_ing) references 	prog_mes_ing(idprog_mes_ing),
    foreign key (idproducto) references productos (idproducto)
    
);

insert into	proyeccion_ingresos(idempresa,	idproducto,	idprog_anual_ing,	idprog_mes_ing, cantidad_ejecutadames, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from proyeccion_ingresos;

CREATE TABLE programacion_ingresos(
    idprogramacion_ingresos serial not null primary key,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio decimal,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos (idproducto)
       
);

insert into programacion_ingresos(idproducto, fecha3, cantidad, precio) values
(2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos;

create table ejecucion_gastos(
    idejecuciongastos serial not null primary key,
    ejecucion_gastos varchar,
    fecha4 date,
    ganacia_perdida decimal,
    total_anual decimal
);

insert into ejecucion_gastos(ejecucion_gastos, fecha4) values
('RECURSOS CORRIENTES', '23-02-2022'),
('GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos(
    idinvetarios serial NOT NULL PRIMARY KEY,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario decimal,
    costo_tota87 decimal
    
);
insert into inventario_productos(detalle, unidad1, cantidad1, costo_unitario) values
('DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos;

create table cuentas_cobro(
    idcuentas serial NOT NULL PRIMARY KEY,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money
    
);
insert into cuentas_cobro(descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
('NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');



create table productos_upab(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos_upab(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÂ³n  y ComercializaciÃƒÂ³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÂ³n de modulos operacionales', 'Descripcion2', 'global');
   

select * from productos_upab;

create table prog_anual_prod_upab(
	idprog_anual_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado integer,
	anho integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_upab (idproducto)
);

insert into prog_anual_prod_upab(idempresa, idproducto, programado, anho) values 
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_anual_ing_upab(
	idprog_anual_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado1 integer,
	anho1 integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_anual_ing_upab(idempresa, idproducto, programado1, anho1) values
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_mes_prod_upab(
	idprog_mes_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado_mes	integer,
	mes varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos (idproducto)
);

insert into prog_mes_prod_upab(idempresa, idproducto, programado_mes , mes) values 
(2, 2, 3577,'enero'),
(1, 2, 233415, 'marzo');

create table prog_mes_ing_upab(
	idprog_mes_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado_mes1	money,
	mes1 varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_upab (idproducto)
);

insert into prog_mes_ing_upab(idempresa, idproducto, programado_mes1, mes1) values
(2, 2, 23577.2,'marzo'),
(1, 2, 2334.5, 'enero');

create table presupuestogastado_upab(
  	grupo varchar,
    presupuesto_anual decimal default null,
    fecha date, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null
);

insert into presupuestogastado_upab(grupo, presupuesto_anual, fecha)  values
('SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
('SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
('MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
('ACTIVOS REALES', 568760.00,'11-12-2021'),
('ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
('SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
('IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado_upab;



create table ejecutado_prod_upab(
    idproducto1 SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    idproducto integer,
    idprog_anual_prod integer,
    idprog_mes_prod integer,
    cantidad_ejecutada integer,
    cumplimiento_porcentaje decimal,
    total_prod_mes integer,
    porcentaje_cumplimiento decimal,
    porcentaje_uso_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_prod) references 	prog_anual_prod_upab(idprog_anual_prod),
    foreign key (idprog_mes_prod) references 	prog_mes_prod_upab(idprog_mes_prod),
    foreign key (idproducto) references productos_upab (idproducto)
);

insert into ejecutado_prod_upab(idempresa,	idproducto,	idprog_anual_prod,	idprog_mes_prod, cantidad_ejecutada, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from ejecutado_prod;

CREATE TABLE proyeccion_ingresos_upab(
    idproyeccion_ingresos serial not null primary key,
    idempresa integer,
    idproducto integer,
    idprog_anual_ing integer,
    idprog_mes_ing integer,
    --me_product varchar,
    cantidad_ejecutadames decimal,
    porcentaje_mes decimal,
    acumulado_mes decimal,
    porcentaje_ejecucion_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_ing) references 	prog_anual_ing_upab(idprog_anual_ing),
    foreign key (idprog_mes_ing) references 	prog_mes_ing_upab(idprog_mes_ing),
    foreign key (idproducto) references productos_upab (idproducto)
    
);

insert into	proyeccion_ingresos_upab(idempresa,	idproducto,	idprog_anual_ing,	idprog_mes_ing, cantidad_ejecutadames, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from proyeccion_ingresos_upab;

CREATE TABLE programacion_ingresos_upab(
    idprogramacion_ingresos serial not null primary key,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio decimal,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos_upab (idproducto)
       
);

insert into programacion_ingresos_upab(idproducto, fecha3, cantidad, precio) values
(2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos_upab;

create table ejecucion_gastos_upab(
    idejecuciongastos serial not null primary key,
    ejecucion_gastos varchar,
    fecha4 date,
    ganacia_perdida decimal,
    total_anual decimal
);

insert into ejecucion_gastos_upab(ejecucion_gastos, fecha4) values
('RECURSOS CORRIENTES', '23-02-2022'),
('GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos_upab(
    idinvetarios serial NOT NULL PRIMARY KEY,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario decimal,
    costo_tota87 decimal
    
);
insert into inventario_productos_upab(detalle, unidad1, cantidad1, costo_unitario) values
('DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos_upab;

create table cuentas_cobro_upab(
    idcuentas serial NOT NULL PRIMARY KEY,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money
    
);
insert into cuentas_cobro_upab(descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
('NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');


//UGC23M

create table productos_ugc23m(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos_ugc23m(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÂ³n  y ComercializaciÃƒÂ³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÂ³n de modulos operacionales', 'Descripcion2', 'global');
   

select * from productos_ugc23m;

create table prog_anual_prod_ugc23m(
	idprog_anual_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado integer,
	anho integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_ugc23m (idproducto)
);

insert into prog_anual_prod_ugc23m(idempresa, idproducto, programado, anho) values 
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_anual_ing_ugc23m(
	idprog_anual_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado1 integer,
	anho1 integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_ugc23m (idproducto)
);

insert into prog_anual_ing_ugc23m(idempresa, idproducto, programado1, anho1) values
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_mes_prod_ugc23m(
	idprog_mes_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado_mes	integer,
	mes varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_ugc23m (idproducto)
);

insert into prog_mes_prod_ugc23m(idempresa, idproducto, programado_mes , mes) values 
(2, 2, 3577,'enero'),
(1, 2, 233415, 'marzo');

create table prog_mes_ing_ugc23m(
	idprog_mes_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado_mes1	money,
	mes1 varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_ugc23m (idproducto)
);

insert into prog_mes_ing_ugc23m(idempresa, idproducto, programado_mes1, mes1) values
(2, 2, 23577.2,'marzo'),
(1, 2, 2334.5, 'enero');

create table presupuestogastado_ugc23m(
  	grupo varchar,
    presupuesto_anual decimal default null,
    fecha date, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null
);

insert into presupuestogastado_ugc23m (grupo, presupuesto_anual, fecha)  values
('SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
('SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
('MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
('ACTIVOS REALES', 568760.00,'11-12-2021'),
('ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
('SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
('IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado_ugc23m;



create table ejecutado_prod_ugc23m(
    idproducto1 SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    idproducto integer,
    idprog_anual_prod integer,
    idprog_mes_prod integer,
    cantidad_ejecutada integer,
    cumplimiento_porcentaje decimal,
    total_prod_mes integer,
    porcentaje_cumplimiento decimal,
    porcentaje_uso_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_prod) references 	prog_anual_prod_ugc23m(idprog_anual_prod),
    foreign key (idprog_mes_prod) references 	prog_mes_prod_ugc23m(idprog_mes_prod),
    foreign key (idproducto) references productos_ugc23m (idproducto)
);

insert into ejecutado_prod_ugc23m(idempresa,	idproducto,	idprog_anual_prod,	idprog_mes_prod, cantidad_ejecutada, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from ejecutado_prod_ugc23m;

CREATE TABLE proyeccion_ingresos_ugc23m(
    idproyeccion_ingresos serial not null primary key,
    idempresa integer,
    idproducto integer,
    idprog_anual_ing integer,
    idprog_mes_ing integer,
    --me_product varchar,
    cantidad_ejecutadames decimal,
    porcentaje_mes decimal,
    acumulado_mes decimal,
    porcentaje_ejecucion_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_ing) references 	prog_anual_ing_ugc23m(idprog_anual_ing),
    foreign key (idprog_mes_ing) references 	prog_mes_ing_ugc23m(idprog_mes_ing),
    foreign key (idproducto) references productos_ugc23m (idproducto)
    
);

insert into	proyeccion_ingresos_ugc23m(idempresa,	idproducto,	idprog_anual_ing,	idprog_mes_ing, cantidad_ejecutadames, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from proyeccion_ingresos_ugc23m;

CREATE TABLE programacion_ingresos_ugc23m(
    idprogramacion_ingresos serial not null primary key,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio decimal,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos_ugc23m (idproducto)
       
);

insert into programacion_ingresos_ugc23m(idproducto, fecha3, cantidad, precio) values
(2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos_ugc23m;

create table ejecucion_gastos_ugc23m(
    idejecuciongastos serial not null primary key,
    ejecucion_gastos varchar,
    fecha4 date,
    ganacia_perdida decimal,
    total_anual decimal
);

insert into ejecucion_gastos_ugc23m(ejecucion_gastos, fecha4) values
('RECURSOS CORRIENTES', '23-02-2022'),
('GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos_ugc23m(
    idinvetarios serial NOT NULL PRIMARY KEY,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario decimal,
    costo_tota87 decimal
    
);
insert into inventario_productos_ugc23m(detalle, unidad1, cantidad1, costo_unitario) values
('DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos_ugc23m;

create table cuentas_cobro_ugc23m(
    idcuentas serial NOT NULL PRIMARY KEY,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money
    
);
insert into cuentas_cobro_ugc23m(descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
('NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');


//ENAUTO

create table productos_enauto(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos_enauto(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÂ³n  y ComercializaciÃƒÂ³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÂ³n de modulos operacionales', 'Descripcion2', 'global');
   

select * from productos_enauto;

create table prog_anual_prod_enauto(
	idprog_anual_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado integer,
	anho integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_enauto (idproducto)
);

insert into prog_anual_prod_enauto(idempresa, idproducto, programado, anho) values 
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_anual_ing_enauto(
	idprog_anual_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado1 integer,
	anho1 integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_enauto (idproducto)
);

insert into prog_anual_ing_enauto(idempresa, idproducto, programado1, anho1) values
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_mes_prod_enauto(
	idprog_mes_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado_mes	integer,
	mes varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_enauto (idproducto)
);

insert into prog_mes_prod_enauto(idempresa, idproducto, programado_mes , mes) values 
(2, 2, 3577,'enero'),
(1, 2, 233415, 'marzo');

create table prog_mes_ing_enauto(
	idprog_mes_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado_mes1	money,
	mes1 varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_enauto (idproducto)
);

insert into prog_mes_ing_enauto(idempresa, idproducto, programado_mes1, mes1) values
(2, 2, 23577.2,'marzo'),
(1, 2, 2334.5, 'enero');

create table presupuestogastado_enauto(
  	grupo varchar,
    presupuesto_anual decimal default null,
    fecha date, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null
);

insert into presupuestogastado_enauto (grupo, presupuesto_anual, fecha)  values
('SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
('SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
('MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
('ACTIVOS REALES', 568760.00,'11-12-2021'),
('ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
('SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
('IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado_enauto;



create table ejecutado_prod_enauto(
    idproducto1 SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    idproducto integer,
    idprog_anual_prod integer,
    idprog_mes_prod integer,
    cantidad_ejecutada integer,
    cumplimiento_porcentaje decimal,
    total_prod_mes integer,
    porcentaje_cumplimiento decimal,
    porcentaje_uso_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_prod) references 	prog_anual_prod_enauto(idprog_anual_prod),
    foreign key (idprog_mes_prod) references 	prog_mes_prod_enauto(idprog_mes_prod),
    foreign key (idproducto) references productos_enauto (idproducto)
);

insert into ejecutado_prod_enauto(idempresa,	idproducto,	idprog_anual_prod,	idprog_mes_prod, cantidad_ejecutada, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from ejecutado_prod_enauto;

CREATE TABLE proyeccion_ingresos_enauto(
    idproyeccion_ingresos serial not null primary key,
    idempresa integer,
    idproducto integer,
    idprog_anual_ing integer,
    idprog_mes_ing integer,
    --me_product varchar,
    cantidad_ejecutadames decimal,
    porcentaje_mes decimal,
    acumulado_mes decimal,
    porcentaje_ejecucion_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_ing) references 	prog_anual_ing_enauto(idprog_anual_ing),
    foreign key (idprog_mes_ing) references 	prog_mes_ing_enauto(idprog_mes_ing),
    foreign key (idproducto) references productos_enauto (idproducto)
    
);

insert into	proyeccion_ingresos_enauto(idempresa,	idproducto,	idprog_anual_ing,	idprog_mes_ing, cantidad_ejecutadames, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from proyeccion_ingresos_enauto;

CREATE TABLE programacion_ingresos_enauto(
    idprogramacion_ingresos serial not null primary key,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio decimal,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos_enauto (idproducto)
       
);

insert into programacion_ingresos_enauto(idproducto, fecha3, cantidad, precio) values
(2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos_enauto;

create table ejecucion_gastos_enauto(
    idejecuciongastos serial not null primary key,
    ejecucion_gastos varchar,
    fecha4 date,
    ganacia_perdida decimal,
    total_anual decimal
);

insert into ejecucion_gastos_enauto(ejecucion_gastos, fecha4) values
('RECURSOS CORRIENTES', '23-02-2022'),
('GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos_enauto(
    idinvetarios serial NOT NULL PRIMARY KEY,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario decimal,
    costo_tota87 decimal
    
);
insert into inventario_productos_enauto(detalle, unidad1, cantidad1, costo_unitario) values
('DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos_enauto;

create table cuentas_cobro_enauto(
    idcuentas serial NOT NULL PRIMARY KEY,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money
    
);
insert into cuentas_cobro_enauto(descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
('NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');



//FBM

create table productos_fbm(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos_fbm(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÂ³n  y ComercializaciÃƒÂ³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÂ³n de modulos operacionales', 'Descripcion2', 'global');
   

select * from productos_fbm;

create table prog_anual_prod_fbm(
	idprog_anual_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado integer,
	anho integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_fbm (idproducto)
);

insert into prog_anual_prod_fbm(idempresa, idproducto, programado, anho) values 
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_anual_ing_fbm(
	idprog_anual_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado1 integer,
	anho1 integer,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_fbm (idproducto)
);

insert into prog_anual_ing_fbm(idempresa, idproducto, programado1, anho1) values
(2, 2, 23577, 2021),
(1, 2, 233415, 2020);

create table prog_mes_prod_fbm(
	idprog_mes_prod SERIAL not NULL primary key,
	idempresa integer,
	idproducto integer,
	programado_mes	integer,
	mes varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_fbm (idproducto)
);

insert into prog_mes_prod_fbm(idempresa, idproducto, programado_mes , mes) values 
(2, 2, 3577,'enero'),
(1, 2, 233415, 'marzo');

create table prog_mes_ing_fbm(
	idprog_mes_ing SERIAL NOT NULL PRIMARY key,
	idempresa integer,
	idproducto integer,
	programado_mes1	money,
	mes1 varchar,
	foreign key (idempresa) references empresas (idempresa),
	foreign key (idproducto) references productos_fbm (idproducto)
);

insert into prog_mes_ing_fbm(idempresa, idproducto, programado_mes1, mes1) values
(2, 2, 23577.2,'marzo'),
(1, 2, 2334.5, 'enero');

create table presupuestogastado_fbm(
  	grupo varchar,
    presupuesto_anual decimal default null,
    fecha date, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null
);

insert into presupuestogastado_fbm (grupo, presupuesto_anual, fecha)  values
('SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
('SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
('MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
('ACTIVOS REALES', 568760.00,'11-12-2021'),
('ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
('SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
('IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado_fbm;



create table ejecutado_prod_fbm(
    idproducto1 SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    idproducto integer,
    idprog_anual_prod integer,
    idprog_mes_prod integer,
    cantidad_ejecutada integer,
    cumplimiento_porcentaje decimal,
    total_prod_mes integer,
    porcentaje_cumplimiento decimal,
    porcentaje_uso_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_prod) references 	prog_anual_prod_fbm(idprog_anual_prod),
    foreign key (idprog_mes_prod) references 	prog_mes_prod_fbm(idprog_mes_prod),
    foreign key (idproducto) references productos_fbm (idproducto)
);

insert into ejecutado_prod_fbm(idempresa,	idproducto,	idprog_anual_prod,	idprog_mes_prod, cantidad_ejecutada, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from ejecutado_prod_fbm;

CREATE TABLE proyeccion_ingresos_fbm(
    idproyeccion_ingresos serial not null primary key,
    idempresa integer,
    idproducto integer,
    idprog_anual_ing integer,
    idprog_mes_ing integer,
    --me_product varchar,
    cantidad_ejecutadames decimal,
    porcentaje_mes decimal,
    acumulado_mes decimal,
    porcentaje_ejecucion_anual decimal,
    fecha1 date,
    foreign key (idempresa) references empresas (idempresa),
    foreign key (idprog_anual_ing) references 	prog_anual_ing_fbm(idprog_anual_ing),
    foreign key (idprog_mes_ing) references 	prog_mes_ing_fbm(idprog_mes_ing),
    foreign key (idproducto) references productos_fbm (idproducto)
    
);

insert into	proyeccion_ingresos_fbm(idempresa,	idproducto,	idprog_anual_ing,	idprog_mes_ing, cantidad_ejecutadames, fecha1) values 
(1,	2,	1,	1, 234,'01-02-2021'),
(1,	1,	1,	2, 56, '01-03-2021');

select * from proyeccion_ingresos_fbm;

CREATE TABLE programacion_ingresos_fbm(
    idprogramacion_ingresos serial not null primary key,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio decimal,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos_fbm (idproducto)
       
);

insert into programacion_ingresos_fbm(idproducto, fecha3, cantidad, precio) values
(2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos_fbm;

create table ejecucion_gastos_fbm(
    idejecuciongastos serial not null primary key,
    ejecucion_gastos varchar,
    fecha4 date,
    ganacia_perdida decimal,
    total_anual decimal
);

insert into ejecucion_gastos_fbm(ejecucion_gastos, fecha4) values
('RECURSOS CORRIENTES', '23-02-2022'),
('GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos_fbm(
    idinvetarios serial NOT NULL PRIMARY KEY,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario decimal,
    costo_tota87 decimal
    
);
insert into inventario_productos_fbm(detalle, unidad1, cantidad1, costo_unitario) values
('DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos_fbm;

create table cuentas_cobro_fbm(
    idcuentas serial NOT NULL PRIMARY KEY,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money
    
);
insert into cuentas_cobro_fbm(descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
('NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');
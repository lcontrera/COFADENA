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
    
);

 
insert into empresas (empresa, descripcion, gerente, telefono, direccion)  values
('UERH', 'Empresa nacional','coronel',2826053,'prado'),
('UPAB', 'Empresa nacional','coronel',2826053,'prado'),
('UGC23', 'Empresa nacional','coronel',2826053,'prado'),
('ENAUTO', 'Empresa nacional automotriz','coronel',282653,'prado'),
('FBM', 'Empresa nacional','coronel',2826053,'prado'),
('UEPII', 'Empresa nacional','coronel',2826053,'prado');



create table productos(
    idproducto SERIAL NOT NULL PRIMARY KEY,
    idempresa integer,
    producto varchar,
    descripcion varchar,
    unidad varchar,
    foreign key (idempresa) references empresas (idempresa)
    );
   
insert into productos(idempresa, producto, descripcion, unidad) values 
(2, 'ConstrucciÃƒÆ’Ã‚Â³n  y ComercializaciÃƒÆ’Ã‚Â³n de Carrozado de vehiculos', 'pertenece a ENAUTO', 'pieza'),
(1, 'ConstrucciÃƒÆ’Ã‚Â³n de modulos operacionales', 'Descripcion2', 'global');
   



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
	programado1 money,
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
	programado_mes	decimal,
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
    cantidad_ejecutadames money,
    porcentaje_mes decimal,
    acumulado_mes money,
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
    idempresa integer,
    idproducto integer,
    Obs varchar,
    /*programado_mes2 decimal,*/
    fecha3 date,
    cantidad integer,
    precio money,
    ingreso_mes decimal,
    /*porcentaje_mes decimal,*/
    total_anual decimal,
    porcentaje_ejecucion_anual decimal,
    fecha date default now(),
    foreign key (idproducto) references productos (idproducto)
       
);

insert into programacion_ingresos(idempresa, idproducto, fecha3, cantidad, precio) values
(2, 2,'23-02-2022', 30780.00, 307);

select * from programacion_ingresos;

create table presupuestogastado(
	idpresupuestogastado serial not null primary key,
	idempresa integer,
  	grupo varchar,
  	ganancia_mensual money,
    presupuesto_anual decimal default null,
    fecha varchar, 
    total_ejecutado decimal default null,
    porcentaje_ejecutado decimal default null,
    eficacia decimal default null,
    foreign key (idempresa) references empresas (idempresa)
);

insert into presupuestogastado (idempresa, grupo, presupuesto_anual, fecha)  values
(3, 'SERVICIOS PERSONALES', 1059351.00,'11-03-2022'),
(3, 'SERVICIOS NO PERSONALES', 7610419.00,'11-02-2022'),
(3, 'MATERIALES Y SUMINISTROS', 1059351.00,'12-03-2022'),
(3, 'ACTIVOS REALES', 568760.00,'11-12-2021'),
(3, 'ACTIVOS FINANCIEROS', 2500.03,'11-03-2022'),
(3, 'SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION', 10194606.00,'11-03-2021'),
(3, 'IMPUESTOS, REGALIAS Y TASAS', 1262185,'11-03-2021');

select * from presupuestogastado;

create table ejecucion_gastos(
    idejecuciongastos serial not null primary key,
    idempresa integer,
    ejecucion_gastos varchar,
    fecha4 varchar,
    ganancia_mensual money,
    total_anual decimal,
    foreign key (idempresa) references empresas (idempresa)
);

insert into ejecucion_gastos(idempresa, ejecucion_gastos, fecha4) values
(2, 'RECURSOS CORRIENTES', '23-02-2022'),
(3, 'GASTOS CORRIENTES', '23-02-2022');

create table inventario_productos(
    idinvetarios serial NOT NULL PRIMARY KEY,
    idempresa integer,
    detalle varchar,
    unidad1 varchar,
    cantidad1 integer,
    costo_unitario money,
    costo_tota87 decimal,
    fecha5 varchar,
    foreign key (idempresa) references empresas (idempresa)
    
);
insert into inventario_productos(idempresa, detalle, unidad1, cantidad1, costo_unitario) values
(3, 'DOMOS PARA OFICINA', 'UNI', 55559, 123.3);

select * from inventario_productos;

create table cuentas_cobro(
    idcuentas serial NOT NULL PRIMARY KEY,
    idempresa integer,
    descripcion varchar,
    deudor varchar,
    monto_total money,
    fecha date,
    pagado money,
    fecha_pago date,
    saldo_deuda money,
    foreign key (idempresa) references empresas (idempresa)
    
);
insert into cuentas_cobro(idempresa, descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values
(3, 'NOSE CUENTA CON LOS DOCUMENTOS DE RESPALDO', 'COMANDO GENERAL DE EJERCITO', 413168.08, '2-4-2019', 2999.3, '28-5-2021');






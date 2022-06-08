<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Mpresupuestogastado extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'presupuestogastado';
    protected $primaryKey = 'idpresupuestogastado';
    protected $fillable = [
        'idempresa',
        'grupo',
        'presupuesto_anual',
        'ganancia_mensual',
        'fecha',
        'total_ejecutado',
        'porcentaje_ejecutado',
        'eficacia'
    ];

    public $timestamps=false;

    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER ARTICULOS
   public static function getpresupuestogastado(){
        $presupuestogastado = Mpresupuestogastado::all();

        return $presupuestogastado;
}
     public static function getpresupuestogastados($empresa){


        $presupuestogastados = DB::select("
            select
            enero.grupo as grupo, enero.ganancia_mensual as enero,
            febrero.ganancia_mensual as febrero,
            marzo.ganancia_mensual  as marzo,
            pri_tri.sum_tri as pri_tri,
            abril.ganancia_mensual as abril,
            mayo.ganancia_mensual as mayo,
            junio.ganancia_mensual  as junio,
            seg_tri.sum_tri as seg_tri,
            julio.ganancia_mensual as julio,
            agosto.ganancia_mensual as agosto,
            septiembre.ganancia_mensual  as septiembre,
            ter_tri.sum_tri as ter_tri,
            octubre.ganancia_mensual as octubre,
            noviembre.ganancia_mensual as noviembre,
            diciembre.ganancia_mensual  as diciembre,
            cua_tri.sum_tri as cua_tri
            from
            (select  grupo, ganancia_mensual from presupuestogastado
            where idempresa  = ? and fecha = '2022-01'
            order by 1) enero
            full join (
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-02'
            order by 1) febrero
            on enero.grupo = febrero.grupo
            full join(
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-03'
            order by 1
            ) marzo
            on enero.grupo= marzo.grupo
            full join(
            select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
            from presupuestogastado
            where idempresa = ?
            and (fecha like '2022-01' or fecha like '2022-02' or fecha like '2022-03')
            order by 1
            ) pri_tri
            on enero.grupo = pri_tri.grupo
            full join
            (select  grupo, ganancia_mensual from presupuestogastado
            where idempresa  = ? and fecha = '2022-04'
            order by 1) abril
            on enero.grupo = abril.grupo
            full join (
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-05'
            order by 1) mayo
            on enero.grupo = mayo.grupo
            full join(
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-06'
            order by 1
            ) junio
            on enero.grupo= junio.grupo
            full join(
            select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
            from presupuestogastado
            where idempresa = ?
            and (fecha like '2022-04' or fecha like '2022-05' or fecha like '2022-06')
            order by 1
            ) seg_tri
            on enero.grupo = seg_tri.grupo
            full join
            (select  grupo, ganancia_mensual from presupuestogastado
            where idempresa  = ? and fecha = '2022-07'
            order by 1) julio
            on enero.grupo = julio.grupo
            full join (
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-08'
            order by 1) agosto
            on enero.grupo = agosto.grupo
            full join(
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-09'
            order by 1
            ) septiembre
            on enero.grupo= septiembre.grupo
            full join(
            select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
            from presupuestogastado
            where idempresa = ?
            and (fecha like '2022-07' or fecha like '2020-08' or fecha like '2020-09')
            order by 1
            ) ter_tri
            on enero.grupo = ter_tri.grupo
            full join
            (select  grupo, ganancia_mensual from presupuestogastado
            where idempresa  = ? and fecha = '2022-10'
            order by 1) octubre
            on enero.grupo = octubre.grupo
            full join (
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-11'
            order by 1) noviembre
            on enero.grupo = noviembre.grupo
            full join(
            select  grupo, ganancia_mensual from presupuestogastado p
            where idempresa  = ? and fecha = '2022-12'
            order by 1
            ) diciembre
            on enero.grupo= diciembre.grupo
            full join(
            select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
            from presupuestogastado
            where idempresa = ?
            and (fecha like '2022-10' or fecha like '2022-11' or fecha like '2022-12')
            order by 1
            ) cua_tri
            on enero.grupo = cua_tri.grupo
            ", [$empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa] );

            //return dd($presupuestogastados);
            return $presupuestogastados;
     }
      public static function getpresupuestogastadJSON($empresa){

        $presupuestogastadJSON = DB::select("
        select distinct  sum(enero.ganancia_mensual) over() as enero,
        sum(febrero.ganancia_mensual) over() as febrero,
        sum(marzo.ganancia_mensual) over()  as marzo,
        sum(pri_tri.sum_tri) over() pri_tri,
        sum(abril.ganancia_mensual) over() as abril,
        sum(mayo.ganancia_mensual) over() as mayo,
        sum(junio.ganancia_mensual) over()  as junio,
        sum(seg_tri.sum_tri) over() as seg_tri,
        sum(julio.ganancia_mensual) over() as julio,
        sum(agosto.ganancia_mensual) over () as agosto,
        sum(septiembre.ganancia_mensual) over () as septiembre,
        sum(ter_tri.sum_tri) over () as ter_tri,
        sum(octubre.ganancia_mensual) over () as octubre,
        sum(noviembre.ganancia_mensual) over () as noviembre,
        sum(diciembre.ganancia_mensual) over () as diciembre,
        sum(cua_tri.sum_tri) over () as cua_tri
        from
        (select  grupo, ganancia_mensual from presupuestogastado
        where idempresa  = ? and fecha= '2022-01'
        order by 1) enero
        full join (
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-02'
        order by 1) febrero
        on enero.grupo = febrero.grupo
        full join(
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-03'
        order by 1
        ) marzo
        on enero.grupo= marzo.grupo
        full join(
        select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
        from presupuestogastado
        where idempresa = ?
        and (fecha like '2022-01' or fecha like '2022-02' or fecha like '2022-03')
        order by 1
        ) pri_tri
        on enero.grupo = pri_tri.grupo
        full join
        (select  grupo, ganancia_mensual from presupuestogastado
        where idempresa  = ? and fecha = '2022-04'
        order by 1) abril
        on enero.grupo = abril.grupo
        full join (
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-05'
        order by 1) mayo
        on enero.grupo = mayo.grupo
        full join(
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-06'
        order by 1
        ) junio
        on enero.grupo= junio.grupo
        full join(
        select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
        from presupuestogastado
        where idempresa = ?
        and (fecha like '2022-04' or fecha like '2022-05' or fecha like '2022-06')
        order by 1
        ) seg_tri
        on enero.grupo = seg_tri.grupo
        full join
        (select  grupo, ganancia_mensual from presupuestogastado
        where idempresa  = ? and fecha = '2022-07'
        order by 1) julio
        on enero.grupo = julio.grupo
        full join (
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-08'
        order by 1) agosto
        on enero.grupo = agosto.grupo
        full join(
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-09'
        order by 1
        ) septiembre
        on enero.grupo= septiembre.grupo
        full join(
        select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
        from presupuestogastado
        where idempresa = ?
        and (fecha like '2022-07' or fecha like '2022-08' or fecha like '2022-09')
        order by 1
        ) ter_tri
        on enero.grupo = ter_tri.grupo
        full join
        (select  grupo, ganancia_mensual from presupuestogastado
        where idempresa  = ? and fecha = '2022-10'
        order by 1) octubre
        on enero.grupo = octubre.grupo
        full join (
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-11'
        order by 1) noviembre
        on enero.grupo = noviembre.grupo
        full join(
        select  grupo, ganancia_mensual from presupuestogastado p
        where idempresa  = ? and fecha = '2022-12'
        order by 1
        ) diciembre
        on enero.grupo= diciembre.grupo
        full join(
        select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
        from presupuestogastado
        where idempresa = ?
        and (fecha like '2022-10' or fecha like '2022-11' or fecha like '2022-12')
        order by 1
        ) cua_tri
        on enero.grupo = cua_tri.grupo",[$empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa]);

            //return dd($presupuestogastad);
          //  return $presupuestogastad;
            return json_encode($presupuestogastadJSON, true);

}



public static function getpresupuestogastad($empresa){

    $presupuestogastad = DB::select("
    select distinct  sum(enero.ganancia_mensual) over() as enero,
    sum(febrero.ganancia_mensual) over() as febrero,
    sum(marzo.ganancia_mensual) over()  as marzo,
    sum(pri_tri.sum_tri) over() pri_tri,
    sum(abril.ganancia_mensual) over() as abril,
    sum(mayo.ganancia_mensual) over() as mayo,
    sum(junio.ganancia_mensual) over()  as junio,
    sum(seg_tri.sum_tri) over() as seg_tri,
    sum(julio.ganancia_mensual) over() as julio,
    sum(agosto.ganancia_mensual) over () as agosto,
    sum(septiembre.ganancia_mensual) over () as septiembre,
    sum(ter_tri.sum_tri) over () as ter_tri,
    sum(octubre.ganancia_mensual) over () as octubre,
    sum(noviembre.ganancia_mensual) over () as noviembre,
    sum(diciembre.ganancia_mensual) over () as diciembre,
    sum(cua_tri.sum_tri) over () as cua_tri
    from
    (select  grupo, ganancia_mensual from presupuestogastado
    where idempresa  = ? and fecha= '2022-01'
    order by 1) enero
    full join (
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-02'
    order by 1) febrero
    on enero.grupo = febrero.grupo
    full join(
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-03'
    order by 1
    ) marzo
    on enero.grupo= marzo.grupo
    full join(
    select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
    from presupuestogastado
    where idempresa = ?
    and (fecha like '2022-01' or fecha like '2022-02' or fecha like '2022-03')
    order by 1
    ) pri_tri
    on enero.grupo = pri_tri.grupo
    full join
    (select  grupo, ganancia_mensual from presupuestogastado
    where idempresa  = ? and fecha = '2022-04'
    order by 1) abril
    on enero.grupo = abril.grupo
    full join (
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-05'
    order by 1) mayo
    on enero.grupo = mayo.grupo
    full join(
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-06'
    order by 1
    ) junio
    on enero.grupo= junio.grupo
    full join(
    select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
    from presupuestogastado
    where idempresa = ?
    and (fecha like '2022-04' or fecha like '2022-05' or fecha like '2022-06')
    order by 1
    ) seg_tri
    on enero.grupo = seg_tri.grupo
    full join
    (select  grupo, ganancia_mensual from presupuestogastado
    where idempresa  = ? and fecha = '2022-07'
    order by 1) julio
    on enero.grupo = julio.grupo
    full join (
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-08'
    order by 1) agosto
    on enero.grupo = agosto.grupo
    full join(
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-09'
    order by 1
    ) septiembre
    on enero.grupo= septiembre.grupo
    full join(
    select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
    from presupuestogastado
    where idempresa = ?
    and (fecha like '2022-07' or fecha like '2022-08' or fecha like '2022-09')
    order by 1
    ) ter_tri
    on enero.grupo = ter_tri.grupo
    full join
    (select  grupo, ganancia_mensual from presupuestogastado
    where idempresa  = ? and fecha = '2022-10'
    order by 1) octubre
    on enero.grupo = octubre.grupo
    full join (
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-11'
    order by 1) noviembre
    on enero.grupo = noviembre.grupo
    full join(
    select  grupo, ganancia_mensual from presupuestogastado p
    where idempresa  = ? and fecha = '2022-12'
    order by 1
    ) diciembre
    on enero.grupo= diciembre.grupo
    full join(
    select distinct on(grupo) grupo, sum(ganancia_mensual) over(partition by grupo) as sum_tri
    from presupuestogastado
    where idempresa = ?
    and (fecha like '2022-10' or fecha like '2022-11' or fecha like '2022-12')
    order by 1
    ) cua_tri
    on enero.grupo = cua_tri.grupo",[$empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa, $empresa]);

        //return dd($presupuestogastad);
      //  return $presupuestogastad;
        return $presupuestogastad;

}
}

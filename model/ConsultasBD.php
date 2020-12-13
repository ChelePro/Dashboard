<?php

	require_once('conexion.php');

	$Consulta1 = "select GrupoOcupacional, round(avg(GastoTotalHogar), 2) as Promedio_Gastos, round(avg(GastoHogarAlimen), 2) as Gasto_Alimentacion, 
                    round(avg(GastoHogarEdu),2) as Gasto_Educacion, round(avg(GastoHogarSalud),2) as Gasto_Salud, round(avg(GastoHogarVivienda),2) as Gasto_Vivienda,
                    round(avg(GastoHogarEmp),2) as Gasto_Empleo from fact_monetario
	                    inner join dim_empleo on dim_empleo.dim_empleo_id = fact_monetario.dim_empleo_id
		                    inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
			                    where dim_tiempo.anio = 2017 group by dim_empleo.GrupoOcupacional order by Promedio_Gastos desc";

	$ActLaborales2017 = mysqli_query($Conexion, $Consulta1);


    $Consulta2 = "select GrupoOcupacional, round(avg(GastoTotalHogar), 2) as Promedio_Gastos, round(avg(GastoHogarAlimen), 2) as Gasto_Alimentacion, 
                    round(avg(GastoHogarEdu),2) as Gasto_Educacion, round(avg(GastoHogarSalud),2) as Gasto_Salud, round(avg(GastoHogarVivienda),2) as Gasto_Vivienda,
                    round(avg(GastoHogarEmp),2) as Gasto_Empleo from fact_monetario
	                    inner join dim_empleo on dim_empleo.dim_empleo_id = fact_monetario.dim_empleo_id
		                    inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
			                    where dim_tiempo.anio = 2018 group by dim_empleo.GrupoOcupacional order by Promedio_Gastos desc";

     $ActLaborales2018 = mysqli_query($Conexion, $Consulta2);     

	 $Consulta3 = "select mes, round(sum(IngresoEmpleoDep), 2) as IngresoEmpleoDep, round(sum(IngresoEmpleoIndep),2) as IngresoEmpeloIndep,
					round(sum(IngresoEmpleoDep + IngresoEmpleoIndep), 2) as Totales, round(avg(IngresoTotalHogar), 2) as Promedio_Ingresos
						from fact_monetario
    						inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
								where dim_tiempo.anio = 2017 group by dim_tiempo.mes order by Promedio_Ingresos desc";

	$IngresosMes2017 = mysqli_query($Conexion, $Consulta3);

	$Consulta4 = "select mes, round(sum(IngresoEmpleoDep), 2) as IngresoEmpleoDep, round(sum(IngresoEmpleoIndep),2) as IngresoEmpeloIndep,
					round(sum(IngresoEmpleoDep + IngresoEmpleoIndep), 2) as Totales, round(avg(IngresoTotalHogar), 2) as Promedio_Ingresos
						from fact_monetario
 						inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
							where dim_tiempo.anio = 2018 group by dim_tiempo.mes order by Promedio_Ingresos desc";

	$IngresosMes2018 = mysqli_query($Conexion, $Consulta4);
?>
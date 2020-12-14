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

	 $Consulta3 = "select mes, round(sum(IngresoEmpleoDep), 2) as IngresoEmpleoDep, round(sum(IngresoEmpleoIndep),2) as IngresoEmpleoIndep,
					round(sum(IngresoEmpleoDep + IngresoEmpleoIndep), 2) as Totales, round(avg(IngresoTotalHogar), 2) as Promedio_Ingresos
						from fact_monetario
    						inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
								where dim_tiempo.anio = 2017 group by dim_tiempo.mes order by Promedio_Ingresos desc";

	$IngresosMes2017 = mysqli_query($Conexion, $Consulta3);

	$Consulta4 = "select mes, round(sum(IngresoEmpleoDep), 2) as IngresoEmpleoDep, round(sum(IngresoEmpleoIndep),2) as IngresoEmpleoIndep,
					round(sum(IngresoEmpleoDep + IngresoEmpleoIndep), 2) as Totales, round(avg(IngresoTotalHogar), 2) as Promedio_Ingresos
						from fact_monetario
 						inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id
							where dim_tiempo.anio = 2018 group by dim_tiempo.mes order by Promedio_Ingresos desc";

	$IngresosMes2018 = mysqli_query($Conexion, $Consulta4);


	$Consulta5 = "select anio, round(avg(GastoTotalHogar), 2) as Promedio_Gastos, round(avg(GastoHogarAlimen), 2) as Gasto_Alimentacion, round(avg(GastoHogarEdu),2) as Gasto_Educacion, round(avg(GastoHogarSalud),2) as Gasto_Salud, round(avg(GastoHogarVivienda),2) as Gasto_Vivienda, round(avg(GastoHogarEmp),2) as Gasto_Empleo from fact_monetario
			inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id 
        		group by dim_tiempo.anio order by dim_tiempo.anio";

    $Comparativa = mysqli_query($Conexion, $Consulta5);


    $Consulta6 = "select round(AVG(GastoTotalHogar), 2) as Gastos2017 from fact_monetario
	inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.fact_monetario_id where dim_tiempo.anio = 2017; ";

	$Gastos2k17 = mysqli_query($Conexion, $Consulta6);

	$Consulta7 = "select round(avg(GastoTotalHogar), 2) as Gastos2018 from fact_monetario
	inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.fact_monetario_id where dim_tiempo.anio = 2018";

	$Gastos2k18 = mysqli_query($Conexion, $Consulta7);

	$Consulta8 = "select round(AVG(IngresoTotalHogar), 2) as TotalIngresos from fact_monetario inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.fact_monetario_id where dim_tiempo.anio = 2017 and dim_tiempo.mes = 'Enero'";

	$IngresosProm2k17 = mysqli_query($Conexion, $Consulta8);


		$Consulta9 = "select round(AVG(IngresoTotalHogar), 2) as TotalIngresos from fact_monetario inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.fact_monetario_id where dim_tiempo.anio = 2018 and dim_tiempo.mes = 'Enero'";

	$IngresosProm2k18 = mysqli_query($Conexion, $Consulta9);

	$Consulta10 = "select round(sum(IngresoRemesas), 2) as Remesas1 from fact_monetario
	inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id where dim_tiempo.anio = 2017";

	$Remesas2017 = mysqli_query($Conexion, $Consulta10);

	$Consulta11 = "select round(sum(IngresoRemesas), 2) as Remesas2 from fact_monetario
	inner join dim_tiempo on dim_tiempo.dim_tiempo_id = fact_monetario.dim_tiempo_id where dim_tiempo.anio = 2018";

	$Remesas2018 = mysqli_query($Conexion, $Consulta11);


	$Consulta12 = "select round(sum(IngresoTotalHogar), 2) as IngresosPv from fact_monetario inner join dim_empleo on dim_empleo.dim_empleo_id = fact_monetario.dim_empleo_id where SectorLaboral = 'Privado'";

	$IngresoPriv = mysqli_query($Conexion, $Consulta12);

	$ConsultaFinal = "select round(sum(IngresoTotalHogar), 2) as IngresosPb from fact_monetario inner join dim_empleo on dim_empleo.dim_empleo_id = fact_monetario.dim_empleo_id where SectorLaboral = 'Publico'";

	$IngresoPub = mysqli_query($Conexion, $ConsultaFinal);
?>
<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\Proceso;
use App\Models\TipoCliente;
use App\Models\TipoDocumento;
use App\Models\Unidad;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tipo1= TipoCliente::create(['nombre'=>'Normal']);
        $Tipo= TipoCliente::create(['nombre'=>'Militar']);
        $Tipo3=TipoCliente::create(['nombre'=>'Especial']);

        $doc1= TipoDocumento::create(['nombre'=>'Acta de reunión']);
        $doc2= TipoDocumento::create(['nombre'=>'Acta E/R']);
        $doc3= TipoDocumento::create(['nombre'=>'Informe']);
        $doc4= TipoDocumento::create(['nombre'=>'Oficio']);
        $doc5= TipoDocumento::create(['nombre'=>'Memorando']);
        $doc6= TipoDocumento::create(['nombre'=>'Expediente']);
        $doc6= TipoDocumento::create(['nombre'=>'Pliegos']);
        $doc7= TipoDocumento::create(['nombre'=>'Contrato']);

        $Uni0= Unidad::create(['nombre'=>'Institucional','descripcion'=>'Institucional']);
        $Uni1= Unidad::create(['nombre'=>'Dirección Administrativa','descripcion'=>'Dirección Administrativa']);
        $Uni2= Unidad::create(['nombre'=>'Dirección de Sistemas','descripcion'=>'Dirección de Sistemas']);
        $Uni3= Unidad::create(['nombre'=>'Dirección de Planificación','descripcion'=>'Dirección de Planificación']);
        $Uni4= Unidad::create(['nombre'=>'Dirección de comunicación','descripcion'=>'Dirección de comunicación']);
      
        $Uni1= Unidad::create(['nombre'=>'Dirección Administrativa','descripcion'=>'Dirección Administrativa']);
        $Uni2= Unidad::create(['nombre'=>'Dirección de Sistemas','descripcion'=>'Dirección de Sistemas']);
        $Uni3= Unidad::create(['nombre'=>'Dirección de Planificación','descripcion'=>'Dirección de Planificación']);
        
        $Pro0= Proceso::create(['nombre'=>'Gestion Institucional','descripcion'=>'Gestion Institucional','anio'=>'2021','unidad_id'=>1]);
        $Pro1= Proceso::create(['nombre'=>'Proceso Administrativa','descripcion'=>'Proceso Administrativa','anio'=>'2021','unidad_id'=>2]);
        $Pro2= Proceso::create(['nombre'=>'Proceso de Sistemas','descripcion'=>'Proceso de Sistemas','anio'=>'2021','unidad_id'=>2]);
        $Pro3= Proceso::create(['nombre'=>'Proceso de Planificación','descripcion'=>'Proceso de Planificación','anio'=>'2021','unidad_id'=>3]);
    
        $Doc=Documento::create([
            'tipo_id'=>1,
            'numero'=>'123',
            'fecha'=>Carbon::create('2021', '03', '21'),
            'nombre'=>'Informe de necesidad - Proceso 1',
            'resumen'=>'Texto de Informe de necesidad',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'1',
            'caja_id'=>'1',
            'url'=>'1.pdf'
        ]);
        $Doc2=Documento::create([
            'tipo_id'=>1,
            'numero'=>'456',
            'fecha'=>Carbon::create('2021', '05', '01'),
            'nombre'=>'Informe de factinilidad del proceso 1',
            'resumen'=>'Informe de factibilidad',
            'unidad_id'=>3,
            'proceso_id'=>'2',
            'carpeta'=>'1',
            'caja_id'=>'1',
            'url'=>'2.pdf'
        ]);
        $Doc3=Documento::create([
            'tipo_id'=>3,
            'numero'=>'a-3',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Documento 3',
            'resumen'=>'Solicitud de certificación',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'3.pdf'
        ]);
        $Doc4=Documento::create([
            'tipo_id'=>3,
            'numero'=>'a-323',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'PLiegos',
            'resumen'=>'Texto del pliego',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'4.pdf'
        ]);
        $Doc5=Documento::create([
            'tipo_id'=>3,
            'numero'=>'av56-323',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Certificación PAC',
            'resumen'=>'Texto del pliego',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'5.pdf'
        ]);
        $Doc6=Documento::create([
            'tipo_id'=>3,
            'numero'=>'afr-323',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Aval de Sercop',
            'resumen'=>'El emite el aval para la compra de 100 computadoras',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'6.pdf'
        ]);
        $Doc7=Documento::create([
            'tipo_id'=>3,
            'numero'=>'aa-323',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Aval de mintel',
            'resumen'=>'intelectual',
            'unidad_id'=>2,
            'proceso_id'=>'2',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'7.pdf'
        ]);
        $Doc8=Documento::create([
            'tipo_id'=>3,
            'numero'=>'01x',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Informe de tthh',
            'resumen'=>'resumen',
            'unidad_id'=>3,
            'proceso_id'=>'1',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'8.pdf'
        ]);
        $Doc8=Documento::create([
            'tipo_id'=>3,
            'numero'=>'01x',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Informe de cunmpliento de norma técnica',
            'resumen'=>'resumen',
            'unidad_id'=>2,
            'proceso_id'=>'1',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'8.pdf'
        ]);
        $Doc9=Documento::create([
            'tipo_id'=>3,
            'numero'=>'01dcx',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Informe de asistencia',
            'resumen'=>'resumen',
            'unidad_id'=>4,
            'proceso_id'=>'1',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'ur9.pdf'
        ]);
        $Doc10=Documento::create([
            'tipo_id'=>3,
            'numero'=>'inf-10-2021',
            'fecha'=>Carbon::create('2021', '01', '01'),
            'nombre'=>'Informe de contraloria',
            'resumen'=>'resumen',
            'unidad_id'=>3,
            'proceso_id'=>'1',
            'carpeta'=>'2',
            'caja_id'=>'1',
            'url'=>'10.pdf'
        ]);
    
    }
}

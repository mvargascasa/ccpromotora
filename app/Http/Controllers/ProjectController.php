<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $validSendEmail = false;
    
    public function index()
    {
        return view('admin.projects.index');
    }
 
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function viewProject(String $nombreProyecto, int $num_department = 1){
        switch ($nombreProyecto) {
            case 'Adra':
                $data['name_folder'] = 'adra';
                $data['num_imagenes'] = 15;
                $data['extension'] = 'webp';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['ciudad'] = 'Cuenca';
                $data['canton'] = 'Azuay';
                $data['sector'] = 'Sector Edificio Vista Linda';
                $data['descripcion'] = '
                    ¡Departamentos con la mejor vista a la ciudad!
                    <br><br>
                    El espacio perfecto para vivir!. Te ofrecemos exclusivos departamentos para tu elección. Ubicación referencial: al Sur de la ciudad de Cuenca,
                    disponen de una excelente y privilegiada vista a la ciudad debido a que se encuentra situada cerca del mirador de Turi.
                ';
                $data['tipo'] = "Departamento";
                $data['monto_reserva'] = "2.500";
                $data['caracteristicas'] = [
                    'generales' => [
                        'Jardin(es)',
                        'Acabados de lujo',
                        'Seguridad'
                    ],
                    'servicios' => [
                        'Video vigilancia',
                        'Seguridad contra incendios',
                        'Planta de emergencia'
                    ],
                ];
                $data['estado'] = "En construccion";
                $data['url_google_maps'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.769145174731!2d-79.02401558541044!3d-2.9206024395227703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd22811a43422d%3A0x6730f8941aab3416!2sEdificio%20Vista%20Linda!5e0!3m2!1ses-419!2sec!4v1639168164971!5m2!1ses-419!2sec";
                $data['departamentos'] = [
                    1 => [
                        'num_departamento' => 1,
                        'precio' => '245.000',
                        'alicuota' => '237.00',
                        'contains_area' => true,
                        'area_interior' => 143.42,
                        'area_verde' => 51.74,
                        'area_parqueo' => 26.50,
                        'area_bodega' => 4.51,
                        'area_terraza' => null,
                        'area_total' => 226.17,
                        'num_habitaciones' => 3,
                        'num_baños' => 4,
                        'parqueadero' => 2,
                        'img_plano' => 'plano_departamento1.jpg'
                    ],
                    2 => [
                        'num_departamento' => 4,
                        'precio' => '99,000',
                        'alicuota' => '116.00',
                        'contains_area' => true,
                        'area_interior' => 70.13,
                        'area_verde' => null,
                        'area_parqueo' => 13.25,
                        'area_bodega' => 4.48,
                        'area_terraza' => 9.59,
                        'area_total' => 97.45,
                        'num_habitaciones' => 1,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento2.jpg'
                    ]
                ];
                break;
            
            case 'Futura Narancay':
                $data['name_folder'] = 'futuranarancay';
                $data['num_imagenes'] = 7;
                $data['extension'] = 'webp';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['ciudad'] = 'Cuenca';
                $data['canton'] = 'Azuay';
                $data['sector'] = 'Narancay';
                $data['descripcion'] = '
                    ¡Departamentos con una experiencia única en diseño y comodidad junto al rio!
                    <br><br>
                    ¿Estás buscando un lugar de confort para vivir?. Los departamentos de Futura Narancay son para ti, con su diseño modernista y elegante
                    disfrutaras cada momento con tu familia. Su ubicación hacen de estos departamentos un lugar agradable.  
                ';
                $data['tipo'] = "Departamento";
                $data['monto_reserva'] = "2.000";
                $data['caracteristicas'] = [
                    'generales' => [
                        'Jardin(es)',
                        'Acabados de lujo',
                        'Ascensor',
                        'Seguridad'
                    ],
                    'servicios' => [
                        'Video vigilancia',
                        'Seguridad contra incendios',
                        'Planta de emergencia'
                    ],
                ];
                $data['estado'] = "En construccion";
                $data['url_google_maps'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.278514156379!2d-79.041292522027!3d-2.9319987681087474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd226785f84007%3A0x998e392aba494da1!2sFederico%20Chopin!5e0!3m2!1ses!2sec!4v1640213435123!5m2!1ses!2sec";
                $data['departamentos'] = [
                    1 => [
                        'num_departamento' => 1,
                        'precio' => '78.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 54.77,
                        'area_verde' => null,
                        'area_parqueo' => 12.5,
                        'area_bodega' => 4.31,
                        'area_terraza' => 43.51,
                        'area_total' => 115.09,
                        'num_habitaciones' => 1,
                        'num_baños' => 1,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento1.webp'
                    ],
                    2 => [
                        'num_departamento' => 2,
                        'precio' => '82.010',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 66.18,
                        'area_verde' => null,
                        'area_parqueo' => 12.50,
                        'area_bodega' => 3.04,
                        'area_terraza' => null,
                        'area_total' => 81.72,
                        'num_habitaciones' => 2,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento2.webp'
                    ],
                    3 => [
                        'num_departamento' => 3,
                        'precio' => '83.778',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 68.17,
                        'area_verde' => null,
                        'area_parqueo' => 12.5,
                        'area_bodega' => 3.13,
                        'area_terraza' => null,
                        'area_total' => 83.80,
                        'num_habitaciones' => 2,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento3.webp'
                    ],
                    4 => [
                        'num_departamento' => 4,
                        'precio' => '125.175,24',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 100.55,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 4.24,
                        'area_terraza' => null,
                        'area_total' => 129.79,
                        'num_habitaciones' => 3,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento4.webp'
                    ],
                    5 => [
                        'num_departamento' => 5,
                        'precio' => '121.876,61',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 101.31,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 4.24,
                        'area_terraza' => null,
                        'area_total' => 130.55,
                        'num_habitaciones' => 3,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento5.webp'
                    ],
                    6 => [
                        'num_departamento' => 6,
                        'precio' => '95.868',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 80.18,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 4.24,
                        'area_terraza' => null,
                        'area_total' => 109.42,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento6.webp'
                    ],
                    7 => [
                        'num_departamento' => 7,
                        'precio' => '95.868',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 79.16,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 3.05,
                        'area_terraza' => null,
                        'area_total' => 107.21,
                        'num_habitaciones' => 3,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento7.webp'
                    ],
                    8 => [
                        'num_departamento' => 8,
                        'precio' => '139.206',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 93.01,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 4.00,
                        'area_terraza' => 79.08,
                        'area_total' => 201.09,
                        'num_habitaciones' => 3,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento8.webp'
                    ],
                    9 => [
                        'num_departamento' => 9,
                        'precio' => '140.663',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 96.68,
                        'area_verde' => null,
                        'area_parqueo' => 25,
                        'area_bodega' => 4.18,
                        'area_terraza' => 95.94 ,
                        'area_total' => 221.80,
                        'num_habitaciones' => 3,
                        'num_baños' => 2,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_departamento9.webp'
                    ]

                ];
                break;

            case 'Toscana':
                $data['name_folder'] = 'toscana';
                $data['num_imagenes'] = 19;
                $data['extension'] = 'webp';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['ciudad'] = 'Cuenca';
                $data['canton'] = 'Azuay';
                $data['sector'] = 'Challuabamba';
                $data['descripcion'] = '
                    ¡La mejor experiencia en condominios con acabados modernos!
                    <br><br>
                    Un lugar ideal para vivir, con un ambiente acogedor y cálido a la hora de escribir recuerdos inolvidables con toda tu familia. Su ubicación se situa
                    al norte de la ciudad en Challuabamba. 
                ';
                $data['tipo'] = "Condominio";
                $data['monto_reserva'] = "2.500";
                $data['caracteristicas'] = [
                    'generales' => [
                        'Jardin(es)',
                        'Acabados de lujo',
                        'Ascensor',
                        'Seguridad'
                    ],
                    'servicios' => [
                        'Video vigilancia',
                        'Seguridad contra incendios',
                        'Planta de emergencia'
                    ],
                ];
                $data['estado'] = "Venta";
                $data['url_google_maps'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.8697943762786!2d-78.91906308539137!3d-2.8539337979211687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd111f42fcd239%3A0xb174d31ae8dedce8!2sCondominio%20La%20Toscana%20Challuabamba!5e0!3m2!1ses-419!2sec!4v1639172454879!5m2!1ses-419!2sec";
                $data['departamentos'] = [
                    1 => [
                        'num_departamento' => 1,
                        'precio' => '166.500',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 83.09,
                        'area_verde' => 61.80,
                        'area_parqueo' => 27.58,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 164.33,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio1.webp'
                    ],
                    2 => [
                        'num_departamento' => 2,
                        'precio' => '166.500',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 83.02,
                        'area_verde' => 69.43,
                        'area_parqueo' => 27.58,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 164.57,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio2.webp'
                    ],
                    3 => [
                        'num_departamento' => 3,
                        'precio' => '160.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 82.67,
                        'area_verde' => 53.42,
                        'area_parqueo' => 27.58,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 163.87,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio3.webp'
                    ],
                    4 => [
                        'num_departamento' => 4,
                        'precio' => '165.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 77.37,
                        'area_verde' => 53.42,
                        'area_parqueo' => 27.58,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 153.27,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio4.webp'
                    ],
                    5 => [
                        'num_departamento' => 5,
                        'precio' => '160.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 81.41,
                        'area_verde' => 53.64,
                        'area_parqueo' => 27.58,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 161.36,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio5.webp'
                    ],
                    6 => [
                        'num_departamento' => 6,
                        'precio' => '160.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 81.17,
                        'area_verde' => 64.15,
                        'area_parqueo' => 27.68,
                        'area_bodega' => null,
                        'area_terraza' => 2.67,
                        'area_total' => 160.88,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio6.webp'
                    ],
                    7 => [
                        'num_departamento' => 7,
                        'precio' => '150.000',
                        'alicuota' => null,
                        'contains_area' => true,
                        'area_interior' => 78.50,
                        'area_verde' => 45.59,
                        'area_parqueo' => 15.87,
                        'area_bodega' => null,
                        'area_terraza' => 2.88,
                        'area_total' => 155.47,
                        'num_habitaciones' => 3,
                        'num_baños' => 3,
                        'parqueadero' => 1,
                        'img_plano' => 'plano_condominio7.webp'
                    ]
                ];
                break;
        }
        return view('pages.project', compact('data', 'num_department'));
    }

    public function sendEmail(Request $request, $nombreProyecto){
        $to = "info@casacredito.com,hserrano@casacredito.com";
        $subject = "Proyectos - Casa Credito Promotora";
        $message = "<br><strong>Lead Proyectos</strong>
            <br>Nombre: " . strip_tags($request->nombre) ."
            <br>Telefono: " . strip_tags($request->telefono) ."
            <br>Email: " . strip_tags($request->email) ."
            <br>Mensaje: " . strip_tags($request->mensaje) ."
            <br>Proyecto: " . strip_tags($nombreProyecto) . "
            <div style='display:flex'><img width='60' height='35' src='http://casacreditopromotora.com/logo-recortado.png' /><h3>Casa Crédito Promotora</h3></div>
        ";

        $header = "From: <proyectos@ccpromotora.com>" . "\r\n" .
            "MIME-Version: 1.0" . "\r\n" .
            "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);
        
        $request->session()->flash('report', 'Se ha enviado el correo');

        return back();
        
    }

}

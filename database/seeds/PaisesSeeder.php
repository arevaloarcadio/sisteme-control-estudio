<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as DateTime;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paises = [
            ['id' => '1','pais' => 'Australia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '2','pais' => 'Austria','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '3','pais' => 'Azerbaiyán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '4','pais' => 'Anguilla','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '5','pais' => 'Argentina','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '6','pais' => 'Armenia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '7','pais' => 'Bielorrusia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '8','pais' => 'Belice','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '9','pais' => 'Bélgica','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '10','pais' => 'Bermudas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '11','pais' => 'Bulgaria','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '12','pais' => 'Brasil','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '13','pais' => 'Reino Unido','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '14','pais' => 'Hungría','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '15','pais' => 'Vietnam','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '16','pais' => 'Haiti','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '17','pais' => 'Guadalupe','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '18','pais' => 'Alemania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '19','pais' => 'Países Bajos, Holanda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '20','pais' => 'Grecia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '21','pais' => 'Georgia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '22','pais' => 'Dinamarca','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '23','pais' => 'Egipto','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '24','pais' => 'Israel','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '25','pais' => 'India','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '26','pais' => 'Irán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '27','pais' => 'Irlanda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '28','pais' => 'España','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '29','pais' => 'Italia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '30','pais' => 'Kazajstán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '31','pais' => 'Camerún','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '32','pais' => 'Canadá','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '33','pais' => 'Chipre','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '34','pais' => 'Kirguistán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '35','pais' => 'China','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '36','pais' => 'Costa Rica','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '37','pais' => 'Kuwait','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '38','pais' => 'Letonia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '39','pais' => 'Libia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '40','pais' => 'Lituania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '41','pais' => 'Luxemburgo','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '42','pais' => 'México','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '43','pais' => 'Moldavia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '44','pais' => 'Mónaco','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '45','pais' => 'Nueva Zelanda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '46','pais' => 'Noruega','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '47','pais' => 'Polonia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '48','pais' => 'Portugal','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '49','pais' => 'Reunión','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '50','pais' => 'Rusia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '51','pais' => 'El Salvador','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '52','pais' => 'Eslovaquia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '53','pais' => 'Eslovenia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '54','pais' => 'Surinam','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '55','pais' => 'Estados Unidos','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '56','pais' => 'Tadjikistan','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '57','pais' => 'Turkmenistan','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '58','pais' => 'Islas Turcas y Caicos','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '59','pais' => 'Turquía','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '60','pais' => 'Uganda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '61','pais' => 'Uzbekistán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '62','pais' => 'Ucrania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '63','pais' => 'Finlandia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '64','pais' => 'Francia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '65','pais' => 'República Checa','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '66','pais' => 'Suiza','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '67','pais' => 'Suecia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '68','pais' => 'Estonia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '69','pais' => 'Corea del Sur','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '70','pais' => 'Japón','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '71','pais' => 'Croacia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '72','pais' => 'Rumanía','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '73','pais' => 'Hong Kong','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '74','pais' => 'Indonesia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '75','pais' => 'Jordania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '76','pais' => 'Malasia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '77','pais' => 'Singapur','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '78','pais' => 'Taiwan','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '79','pais' => 'Bosnia y Herzegovina','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '80','pais' => 'Bahamas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '81','pais' => 'Chile','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '82','pais' => 'Colombia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '83','pais' => 'Islandia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '84','pais' => 'Corea del Norte','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '85','pais' => 'Macedonia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '86','pais' => 'Malta','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '87','pais' => 'Pakistán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '88','pais' => 'Papúa-Nueva Guinea','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '89','pais' => 'Perú','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '90','pais' => 'Filipinas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '91','pais' => 'Arabia Saudita','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '92','pais' => 'Tailandia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '93','pais' => 'Emiratos árabes Unidos','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '94','pais' => 'Groenlandia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '95','pais' => 'Venezuela','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '96','pais' => 'Zimbabwe','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '97','pais' => 'Kenia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '98','pais' => 'Algeria','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '99','pais' => 'Líbano','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '100','pais' => 'Botsuana','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '101','pais' => 'Tanzania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '102','pais' => 'Namibia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '103','pais' => 'Ecuador','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '104','pais' => 'Marruecos','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '105','pais' => 'Ghana','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '106','pais' => 'Siria','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '107','pais' => 'Nepal','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '108','pais' => 'Mauritania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '109','pais' => 'Seychelles','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '110','pais' => 'Paraguay','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '111','pais' => 'Uruguay','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '112','pais' => 'Congo (Brazzaville]','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '113','pais' => 'Cuba','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '114','pais' => 'Albania','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '115','pais' => 'Nigeria','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '116','pais' => 'Zambia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '117','pais' => 'Mozambique','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '119','pais' => 'Angola','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '120','pais' => 'Sri Lanka','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '121','pais' => 'Etiopía','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '122','pais' => 'Túnez','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '123','pais' => 'Bolivia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '124','pais' => 'Panamá','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '125','pais' => 'Malawi','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '126','pais' => 'Liechtenstein','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '127','pais' => 'Bahrein','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '128','pais' => 'Barbados','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '130','pais' => 'Chad','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '131','pais' => 'Man, Isla de','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '132','pais' => 'Jamaica','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '133','pais' => 'Malí','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '134','pais' => 'Madagascar','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '135','pais' => 'Senegal','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '136','pais' => 'Togo','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '137','pais' => 'Honduras','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '138','pais' => 'República Dominicana','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '139','pais' => 'Mongolia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '140','pais' => 'Irak','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '141','pais' => 'Sudáfrica','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '142','pais' => 'Aruba','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '143','pais' => 'Gibraltar','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '144','pais' => 'Afganistán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '145','pais' => 'Andorra','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '147','pais' => 'Antigua y Barbuda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '149','pais' => 'Bangladesh','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '151','pais' => 'Benín','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '152','pais' => 'Bután','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '154','pais' => 'Islas Virgenes Británicas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '155','pais' => 'Brunéi','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '156','pais' => 'Burkina Faso','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '157','pais' => 'Burundi','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '158','pais' => 'Camboya','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '159','pais' => 'Cabo Verde','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '164','pais' => 'Comores','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '165','pais' => 'Congo (Kinshasa]','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '166','pais' => 'Cook, Islas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '168','pais' => 'Costa de Marfil','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '169','pais' => 'Djibouti, Yibuti','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '171','pais' => 'Timor Oriental','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '172','pais' => 'Guinea Ecuatorial','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '173','pais' => 'Eritrea','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '175','pais' => 'Feroe, Islas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '176','pais' => 'Fiyi','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '178','pais' => 'Polinesia Francesa','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '180','pais' => 'Gabón','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '181','pais' => 'Gambia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '184','pais' => 'Granada','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '185','pais' => 'Guatemala','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '186','pais' => 'Guernsey','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '187','pais' => 'Guinea','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '188','pais' => 'Guinea-Bissau','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '189','pais' => 'Guyana','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '193','pais' => 'Jersey','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '195','pais' => 'Kiribati','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '196','pais' => 'Laos','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '197','pais' => 'Lesotho','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '198','pais' => 'Liberia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '200','pais' => 'Maldivas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '201','pais' => 'Martinica','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '202','pais' => 'Mauricio','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '205','pais' => 'Myanmar','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '206','pais' => 'Nauru','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '207','pais' => 'Antillas Holandesas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '208','pais' => 'Nueva Caledonia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '209','pais' => 'Nicaragua','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '210','pais' => 'Níger','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '212','pais' => 'Norfolk Island','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '213','pais' => 'Omán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '215','pais' => 'Isla Pitcairn','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '216','pais' => 'Qatar','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '217','pais' => 'Ruanda','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '218','pais' => 'Santa Elena','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '219','pais' => 'San Cristobal y Nevis','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '220','pais' => 'Santa Lucía','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '221','pais' => 'San Pedro y Miquelón','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '222','pais' => 'San Vincente y Granadinas','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '223','pais' => 'Samoa','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '224','pais' => 'San Marino','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '225','pais' => 'San Tomé y Príncipe','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '226','pais' => 'Serbia y Montenegro','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '227','pais' => 'Sierra Leona','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '228','pais' => 'Islas Salomón','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '229','pais' => 'Somalia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '232','pais' => 'Sudán','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '234','pais' => 'Swazilandia','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '235','pais' => 'Tokelau','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '236','pais' => 'Tonga','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '237','pais' => 'Trinidad y Tobago','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '239','pais' => 'Tuvalu','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '240','pais' => 'Vanuatu','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '241','pais' => 'Wallis y Futuna','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '242','pais' => 'Sáhara Occidental','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '243','pais' => 'Yemen','created_at' => DateTime::now(),'updated_at' => DateTime::now()],
            ['id' => '246','pais' => 'Puerto Rico','created_at' => DateTime::now(),'updated_at' => DateTime::now()]
          ];

		Pais::insert($paises);
    }
}

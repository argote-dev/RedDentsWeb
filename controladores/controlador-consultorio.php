<?php  
require 'modelos/consultorio_modelo.php';

class Controlador_consultorio
{
    private $objConsultorio;

    public function __construct()
    {
        $this->objConsultorio = new Consultorio_modelo();
    }

    /**
     * Método para validar los campos del formulario de registro de consultorio
     * y guardarlos en un array asociativo y enviarlos al método 
     * registrarConsultorioModelo()
     */
    public function registroConsultoriosControl(){

        if (isset($_POST["btnCrearConsultorio"])) {         
            
            $datosConsultorio =  array('id_consultorio' =>$_POST['id_consultorio'], 
                                      'usuario_id_consultorio' =>$_POST['usuario_id_consultorio'],
                                      'nombre_consultorio' =>$_POST['nombre_consultorio'],
                                      'nit_consultorio' =>$_POST['nit_consultorio'],
                                      'direccion_consultorio' =>$_POST['direccion_consultorio'],
                                      'telefono_consultorio' =>$_POST['telefono_consultorio']
              ); 

            $rta = $this->objConsultorio->registrarConsultorioModelo($datosConsultorio);

            if ($rta) {
                echo "se registro sus datos";
            }else{
                echo "error al registrar";
            }
            

            //echo $rta;
        }
    }

    /**
     * Método que a partir del método listarOdontologosModelo() puede obtener 
     * un array con los odontologos para listarlo en una tabla o un valor 
     * false con el cual enviara un mensaje 
     */
    public function listarConsultoriosControl(){

        $arConsultorios = $this->objConsultorio->listarConsultoriosModelo();

        if ($arConsultorios) {

            foreach ($arConsultorios as $consultorio) {
                echo '
                    <tr>
                        <td>'.$consultorio->CONS_ID.'</td>
                        <td>'.$consultorio->USU_ID.'</td>
                        <td>'.$consultorio->CONS_NIT.'</td>
                        <td>'.$consultorio->CONS_NOMBRE.'</td>
                        <td>'.$consultorio->CONS_DIRECCION.'</td>
                        <td>'.$consultorio->CONS_TELEFONO.'</td>
                        <td>
                            <a class="botones" href="#"><acronym lang="es" title="Actualizar"><img src="vistas/img/editar.png" class="acciones"></acronym></a>
                            <button type="button" class="botones" data-toggle="modal" data-target="#exampleModalCenter"><acronym lang="es" title="Eliminar"><img src="vistas/img/eliminar.png" class="acciones"></acronym></button>
                        </td>
                    </tr>';
            }
        }
        else{
            echo "<h3 style='color:red;'>No Hay Consultorios Registrados</h3>";
        }
        
    }

}

function crearEsquema($id_consultorio){
  	$bd = "
	    drop table if exists AGENDA_$id_consultorio;
	    drop table if exists ANTECEDENTES_$id_consultorio;
	    drop table if exists CARA_DIENTE_$id_consultorio;
	    drop table if exists CITA_$id_consultorio;
	    drop table if exists CONVENCIONES_$id_consultorio;
	    drop table if exists DIAGNOSTICO_$id_consultorio;
	    drop table if exists DIENTE_$id_consultorio;
	    drop table if exists HABITOS_ORALES_$id_consultorio;
	    drop table if exists HISTORIA_CLINICA_$id_consultorio;
	    drop table if exists HORARIOS_$id_consultorio;
	    drop table if exists ODONTOGRAMA_$id_consultorio;
	    drop table if exists ODONTOLOGO_$id_consultorio;
	    drop table if exists PACIENTE_$id_consultorio;
	    drop table if exists REL_CARADIENTE_CONVENCIONES_$id_consultorio;
	    drop table if exists REL_HISTORIA_ANTECEDENTES_$id_consultorio;
	    drop table if exists REL_HISTORIA_HABITOS_$id_consultorio;
	    drop table if exists TRATAMIENTO_$id_consultorio;

	    /*==============================================================*/
	    /* Table: AGENDA                                                */
	    /*==============================================================*/
	    create table AGENDA_$id_consultorio
	    (
	       AGE_ID               varchar(10) not null,
	       ODO_ID               varchar(10) not null,
	       AGE_FECINICIO        date,
	       AGE_FECFIN           date,
	       AGE_ESTADO           varchar(0),
	       primary key (AGE_ID)
	    );

	    /*==============================================================*/
	    /* Table: ANTECEDENTES                                          */
	    /*==============================================================*/
	    create table ANTECEDENTES_$id_consultorio
	    (
	       ANT_ID               varchar(10) not null,
	       ANT_NOMBRE           varchar(50),
	       primary key (ANT_ID)
	    );

	    /*==============================================================*/
	    /* Table: CARA_DIENTE                                           */
	    /*==============================================================*/
	    create table CARA_DIENTE_$id_consultorio
	    (
	       CAR_ID               varchar(10) not null,
	       DIEN_ID              varchar(10) not null,
	       CAR_NOMBRE           varchar(50),
	       CAR_ESTADO           varchar(100),
	       primary key (CAR_ID)
	    );

	    /*==============================================================*/
	    /* Table: CITA                                                  */
	    /*==============================================================*/
	    create table CITA_$id_consultorio
	    (
	       CIT_ID               varchar(10) not null,
	       ODO_ID               varchar(10) not null,
	       PAC_ID               varchar(10) not null,
	       CIT_HORAINICIO       date,
	       CIT_HORAFIN          date,
	       CIT_ESTADO           varchar(40),
	       CIT_DESCRIPCION      varchar(200),
	       primary key (CIT_ID)
	    );

	    /*==============================================================*/
	    /* Table: CONVENCIONES                                          */
	    /*==============================================================*/
	    create table CONVENCIONES_$id_consultorio
	    (
	       CON_ID               varchar(10) not null,
	       CON_NOMBRES          varchar(50),
	       primary key (CON_ID)
	    );

	    /*==============================================================*/
	    /* Table: DIAGNOSTICO                                           */
	    /*==============================================================*/
	    create table DIAGNOSTICO_$id_consultorio
	    (
	       DIAG_ID              varchar(10) not null,
	       HIS_ID               varchar(10) not null,
	       ODONT_ID             varchar(10) not null,
	       DIAG_NOMBRE          varchar(50),
	       DIAG_FECHA           date,
	       DIAG_DESCRIPCION     varchar(500),
	       primary key (DIAG_ID)
	    );

	    /*==============================================================*/
	    /* Table: DIENTE                                                */
	    /*==============================================================*/
	    create table DIENTE_$id_consultorio
	    (
	       DIEN_ID              varchar(10) not null,
	       ODONT_ID             varchar(10) not null,
	       DIEN_NOMBRE          varchar(50),
	       DIEN_NUMERO          varchar(10),
	       DIEN_TIPO_DIENTE     varchar(50),
	       primary key (DIEN_ID)
	    );

	    /*==============================================================*/
	    /* Table: HABITOS_ORALES                                        */
	    /*==============================================================*/
	    create table HABITOS_ORALES_$id_consultorio
	    (
	       HA_ID                varchar(10) not null,
	       HA_NOMBRE            varchar(50),
	       primary key (HA_ID)
	    );

	    /*==============================================================*/
	    /* Table: HISTORIA_CLINICA                                      */
	    /*==============================================================*/
	    create table HISTORIA_CLINICA_$id_consultorio
	    (
	       HIS_ID               varchar(10) not null,
	       PAC_ID               varchar(10) not null,
	       HIS_FECATENCION      date,
	       HIS_HORATENCION      date,
	       HIS_MOTIVOCONSULTA   varchar(500),
	       HIS_OBSERVACION      varchar(500),
	       primary key (HIS_ID)
	    );

	    /*==============================================================*/
	    /* Table: HORARIOS                                              */
	    /*==============================================================*/
	    create table HORARIOS_$id_consultorio
	    (
	       HOR_ID               varchar(10) not null,
	       AGE_ID               varchar(10) not null,
	       JORNADA              varchar(10),
	       HOR_HORAINICIO       date,
	       HOR_HORAFINAL        date,
	       HOR_FECHA            date,
	       HOR_ESTADO           varchar(50),
	       primary key (HOR_ID)
	    );

	    /*==============================================================*/
	    /* Table: ODONTOGRAMA                                           */
	    /*==============================================================*/
	    create table ODONTOGRAMA_$id_consultorio
	    (
	       ODONT_ID             varchar(10) not null,
	       ODONT_TIPO_ID        varchar(50),
	       ODONT_FECHA          date,
	       primary key (ODONT_ID)
	    );

	    /*==============================================================*/
	    /* Table: ODONTOLOGO                                            */
	    /*==============================================================*/
	    create table ODONTOLOGO_$id_consultorio
	    (
	       ODO_ID               varchar(10) not null,
	       ODO_TIPO_ID          varchar(30),
	       ODO_PRIMER_NOMBRE    varchar(50),
	       ODO_SEGUNDO_NOMBRE   varchar(50),
	       ODO_PRIMER_APELLIDO  varchar(50),
	       ODO_SEGUNDO_APELLIDO varchar(50),
	       ODO_DIRECCION        varchar(50),
	       ODO_TELEFONO         varchar(10),
	       ODO_ESPECIALIDAD     varchar(50),
	       ODO_FECNACIMIENTO    date,
	       ODO_FECREGISTRO      date,
	       ODO_GENERO           char(1),
	       ODO_FOTO             varchar(100),
	       primary key (ODO_ID)
	    );

	    /*==============================================================*/
	    /* Table: PACIENTE                                              */
	    /*==============================================================*/
	    create table PACIENTE_$id_consultorio
	    (
	       PAC_ID               varchar(10) not null,
	       PAC_TIPO_ID          varchar(30),
	       PAC_PRIMER_NOMBRE    varchar(50),
	       PAC_SEGUNDO_NOMBRE   varchar(50),
	       PAC_PRIMER_APELLIDO  varchar(50),
	       PAC_SEGUNDO_APELLIDO varchar(50),
	       PAC_DIRECCION        varchar(50),
	       PAC_TELEFONO         varchar(10),
	       PAC_FECNACIMIENTO    date,
	       PAC_REGISTRO         date,
	       PAC_GENERO           char(1),
	       PAC_FOTO             varchar(100),
	       primary key (PAC_ID)
	    );

	    /*==============================================================*/
	    /* Table: REL_CARADIENTE_CONVENCIONES                           */
	    /*==============================================================*/
	    create table REL_CARADIENTE_CONVENCIONES_$id_consultorio
	    (
	       RCC_ID   varchar(10) not null,
	       CAR_ID               varchar(10) not null,
	       CON_ID               varchar(10) not null,
	       primary key (RCC_ID)
	    );

	    /*==============================================================*/
	    /* Table: REL_HISTORIA_ANTECEDENTES                             */
	    /*==============================================================*/
	    create table REL_HISTORIA_ANTECEDENTES_$id_consultorio
	    (
	       RHA_ID   varchar(10) not null,
	       HIS_ID               varchar(10) not null,
	       ANT_ID               varchar(10) not null,
	       RHA_TIPO_ANTECEDENTE varchar(50),
	       primary key (RHA_ID)
	    );

	    /*==============================================================*/
	    /* Table: REL_HISTORIA_HABITOS                                  */
	    /*==============================================================*/
	    create table REL_HISTORIA_HABITOS_$id_consultorio
	    (
	       RHH_ID   varchar(10) not null,
	       HIS_ID               varchar(10) not null,
	       HA_ID                varchar(10) not null,
	       primary key (RHH_ID)
	    );

	    /*==============================================================*/
	    /* Table: TRATAMIENTO                                           */
	    /*==============================================================*/
	    create table TRATAMIENTO_$id_consultorio
	    (
	       TRA_ID               varchar(10) not null,
	       DIAG_ID              varchar(10) not null,
	       TRA_NOMBRE           varchar(50),
	       TRA_DESCRIPCION      varchar(200),
	       TRA_FECINICIO        date,
	       TRA_FECFINAL         date,
	       primary key (TRA_ID)
	    );

	    /*==============================================================*/
	    /* Table: USUARIO                                               */
	    /*==============================================================*/


	    alter table AGENDA_$id_consultorio add constraint FK_CREA foreign key (ODO_ID)
	          references ODONTOLOGO_$id_consultorio (ODO_ID) on delete restrict on update restrict;

	    alter table CARA_DIENTE_$id_consultorio add constraint FK_VISUALIZA foreign key (DIEN_ID)
	          references DIENTE_$id_consultorio (DIEN_ID) on delete restrict on update restrict;

	    alter table CITA_$id_consultorio add constraint FK_RELATIONSHIP_3 foreign key (ODO_ID)
	          references ODONTOLOGO_$id_consultorio (ODO_ID) on delete restrict on update restrict;

	    alter table CITA_$id_consultorio add constraint FK_RESERVA foreign key (PAC_ID)
	          references PACIENTE_$id_consultorio (PAC_ID) on delete restrict on update restrict;

	    alter table DIAGNOSTICO_$id_consultorio add constraint FK_LLEVA foreign key (HIS_ID)
	          references HISTORIA_CLINICA_$id_consultorio (HIS_ID) on delete restrict on update restrict;

	    alter table DIAGNOSTICO_$id_consultorio add constraint FK_RELACIONA foreign key (ODONT_ID)
	          references ODONTOGRAMA_$id_consultorio (ODONT_ID) on delete restrict on update restrict;

	    alter table DIENTE_$id_consultorio add constraint FK_GUARDA foreign key (ODONT_ID)
	          references ODONTOGRAMA_$id_consultorio (ODONT_ID) on delete restrict on update restrict;

	    alter table HISTORIA_CLINICA_$id_consultorio add constraint FK_TIENE foreign key (PAC_ID)
	          references PACIENTE_$id_consultorio (PAC_ID) on delete restrict on update restrict;

	    alter table HORARIOS_$id_consultorio add constraint FK_INCLUYE foreign key (AGE_ID)
	          references AGENDA_$id_consultorio (AGE_ID) on delete restrict on update restrict;

	    alter table REL_CARADIENTE_CONVENCIONES_$id_consultorio add constraint FK_REL_CARADIENTE_CONVENCIONES foreign key (CON_ID)
	          references CONVENCIONES_$id_consultorio (CON_ID) on delete restrict on update restrict;

	    alter table REL_CARADIENTE_CONVENCIONES_$id_consultorio add constraint FK_REL_CARADIENTE_CONVENCIONES2 foreign key (CAR_ID)
	          references CARA_DIENTE_$id_consultorio (CAR_ID) on delete restrict on update restrict;

	    alter table REL_HISTORIA_ANTECEDENTES_$id_consultorio add constraint FK_REL_HISTORIA_ANTECEDENTES foreign key (ANT_ID)
	          references ANTECEDENTES_$id_consultorio (ANT_ID) on delete restrict on update restrict;

	    alter table REL_HISTORIA_ANTECEDENTES_$id_consultorio add constraint FK_REL_HISTORIA_ANTECEDENTES2 foreign key (HIS_ID)
	          references HISTORIA_CLINICA_$id_consultorio (HIS_ID) on delete restrict on update restrict;

	    alter table REL_HISTORIA_HABITOS_$id_consultorio add constraint FK_REL_HISTORIA_HABITOS foreign key (HA_ID)
	          references HABITOS_ORALES_$id_consultorio (HA_ID) on delete restrict on update restrict;

	    alter table REL_HISTORIA_HABITOS_$id_consultorio add constraint FK_REL_HISTORIA_HABITOS2 foreign key (HIS_ID)
	          references HISTORIA_CLINICA_$id_consultorio (HIS_ID) on delete restrict on update restrict;

	    alter table TRATAMIENTO_$id_consultorio add constraint FK_PRODUCE foreign key (DIAG_ID)
	          references DIAGNOSTICO_$id_consultorio (DIAG_ID) on delete restrict on update restrict;";
	echo $bd; 
}

?>
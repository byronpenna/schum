<?php 
class Ourteamm extends CI_Model
{
	
	function __construct()
	{
		
	}
	function getCuadritoEmpleados(){
		// loads
			$this->load->model("indexm");		
		// vars 
			$indexModel = new Indexm();
			$empleados = $indexModel->getEmpleados(-1,-1);
			$cuadritos = "";	
		// do it 
		foreach ($empleados as $key => $value) {
			$imgSrc = URLOCAL;
			$imgSrc	.= str_replace("../Archivos/","", $value->rutaImg); 
			// base_url("img/our_team/persona1.png")
			$divListing = "";
			if($value->listings != '-1'){
				$divListing = "
					<div class='col-xs-6 container-list' id='res2000fixIcon3'>
						<i class='fa fa-list' style='color:#314782;'></i>
					</div>
					<div class='col-xs-6 empleadoIcon' id='res1700fixIcon'>
						<p>".$value->listings." ACTIVE LISTINGS</p>
					</div>
				";	
			}
			if($value->email != "-1"){
				$divEmail = "<a href='mailto:".$value->email."'>
									<div class='col-xs-6' id='res2000fixIcon2'>
										<i class='fa fa-envelope' style='color:#314782;'></i>	
									</div>
									<div class='col-xs-6 empleadoIcon' id='res1400fixIcon'>
										<p>EMAIL</p>
									</div>	
								</a>";
			}else{
				$divEmail = "";
			}
			$cuadritos .= "
				<div class='col-md-3 col-sm-5 empleado'>
					<div class='row'>
						<div class='row container-fluid'>
							<a href='".site_url("individual/index/".$value->idEmpleado." ")."'>
							<img class='imgFull' src='".$imgSrc."'>
							</a>
						</div>
					</div>
					<div class='row container-fluid txtEmpleado'>
						<div class='row container-fluid descripcionEmpleado'>
							<h2>".$value->nombre."</h2>
							<h3>".$value->posicion."</h3>
						</div>
						<div class='row container-fluid' id='contedordeiconos'>
							<div class='col-md-6 paddingNull'>
								<a href=".site_url("listings/getListingFromAgent/".$value->idEmpleado." ")."'>
								".$divListing."
								</a>
							</div>
							<div class='col-md-6' id='res2000fixIcon'>
								".$divEmail."
							</div>
						</div>
						<div class='row container-fluid textoEmpleado'>
							<p>
								".nl2br($value->shortDescription)."
							</p>
						</div>
						<div class='row container-fluid accionEmpleado'>
							<a href='".site_url("individual/index/".$value->idEmpleado." ")."'>
								<button type='button'>Read more</button>
							</a>
						</div>
					</div>

					<div class='row container-fluid  conteIconos2' id='contedordeiconos'>
							<div class='col-md-6 paddingNull'>
								<a href=".site_url("listings/getListingFromAgent/".$value->idEmpleado." ")."'>
								".$divListing."
								</a>
							</div>
							<div class='col-md-6' id='res2000fixIcon'>
								<a href='mailto:".$value->email."'>
									<div class='col-xs-6' id='res2000fixIcon2'>
										<i class='fa fa-envelope' style='color:#314782;'></i>	
									</div>
									<div class='col-xs-6 empleadoIcon' id='res1400fixIcon'>
										<p>EMAIL</p>
									</div>	
								</a>
							</div>
						</div>




				</div>
			";
		}
		
		
		return $cuadritos;
	}
}
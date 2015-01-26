<?php 
include_once(APPPATH.'plugins/twitter2/TwitterOAuth.php');
class Padrem extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	public function getRSS($url){
		$rss = new DOMDocument();
		$rss->load($url);
		// print_r($rss);
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $node) {
			$item = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
				);
			array_push($feed, $item);
		}
		// print_r($feed);
		return $feed;
	}
	public function getTweets($nTweets,$twitterName){
		# Load Twitter class
		// require_once('TwitterOAuth.php');

		# Define constants
		// define('TWEET_LIMIT', $nTweets);
		// define('TWITTER_USERNAME', $twitterName);
		define('CONSUMER_KEY', 'PXXAQ3oPHiji4MmXfb4GlW64Z');
		define('CONSUMER_SECRET', 'ZXuBGds4wisrBj9e82aZNeLfxReReWYL0mDtqjKxlTgPqFGKmR');
		define('ACCESS_TOKEN', '475449870-bluBlqL384UWQFYedQLw6EdBqQ0fGppbzjBS1o6T');
		define('ACCESS_TOKEN_SECRET', 'xmXmukPMY1osTtlbhqXFs2GA5w2QjRKNWDo5taTYqoP0k');

		# Create the connection
		$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

		# Migrate over to SSL/TLS
		$twitter->ssl_verifypeer = true;

		# Load the Tweets
		$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => $twitterName, 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => $nTweets));

		# Example output
		if(!empty($tweets)) {
		    foreach($tweets as $key => $tweet) {

		        # Access as an object
		        $tweetText = $tweet['text'];

		        # Make links active
		        $tweetText = preg_replace("#(http://|(www.))(([^s<]{4,68})[^s<]*)#", '<a href="http://$2$3" target="_blank">$1$2$4</a>', $tweetText);

		        # Linkify user mentions
		        $tweetText = preg_replace("/@(w+)/", '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweetText);

		        # Linkify tags
		        $tweetText = preg_replace("/#(w+)/", '<a href="http://search.twitter.com/search?q=$1" target="_blank">#$1</a>', $tweetText);
				$tweetText = preg_replace("/#([A-Za-z0-9_]+)/", "<a href='https://twitter.com/hashtag/$1?src=hash' target='_blank'>#$1</a>", $tweetText);	
		       	$tweets[$key]["text"] = $tweetText;
		        # Output
		        // echo $tweetText."<br>";
		    }
		}else{
			echo "you don't have a tweet";
		}
		return $tweets;	
	}
	public function getResulset($sql){
		$this->db->trans_start();
			$query 		= $this->db->query($sql);
			$retorno 	= $query->result(); 
			$query->free_result();
			$query->next_result();
		$this->db->trans_complete();
		return $retorno;
	}
	public function getResulseti($sql){
		$this->db->trans_start();
			$query 		= $this->db->query($sql);
			$retorno 	= $query; 
			$query->free_result();
			$query->next_result();
		$this->db->trans_complete();
		return $retorno;
	}
	public function getImgSrc($imgRuta){
		$imgSrc = URLOCAL;
		$img 	= str_replace("../Archivos/","", $imgRuta); 
		$imgSrc .= $img;
		return $imgSrc;
	}
	public function getSqlEspecialListing(){
		$sql = "select 
				`agente`.`Agente` AS `Agente`,
				count(`codigo`.`exp_id`) AS `cnListings` 
				from 
				(
					SELECT
						`crm_exp_expediente`.`exp_id` AS `exp_id`
					FROM
						`crm_exp_expediente`
					WHERE
						(
							(
								`crm_exp_expediente`.`exp_com_id` = 17
							)
							AND (
								`crm_exp_expediente`.`exp_cat_id` = 12
							)
						)
					GROUP BY
						`crm_exp_expediente`.`exp_id`
				) codigo
				LEFT JOIN
				(
					SELECT
						`E`.`exp_id` AS `id1`,
						`E`.`exp_valor` AS `Agente`
					FROM
						(
							`crm_exp_expediente` `E`
							JOIN `crm_atr_atributo` `A` ON (
								(
									`A`.`atr_id` = `E`.`exp_atr_id`
								)
							)
						)
					WHERE
						(
							(`E`.`exp_cat_id` = 12)
							AND (`A`.`atr_comp_id` = 17)
							AND (
								`A`.`atr_nombre` = 'Agent / Realtor ®'
							)
						)
				) agente
				on `agente`.`id1` = `codigo`.`exp_id`
				LEFT JOIN (
						SELECT
						`E`.`exp_id` AS `id2`,
						`E`.`exp_valor` AS `Market`
					FROM
						(
							`crm_exp_expediente` `E`
							JOIN `crm_atr_atributo` `A` ON (
								(
									`A`.`atr_id` = `E`.`exp_atr_id`
								)
							)
						)
					WHERE
						(
							(`E`.`exp_cat_id` = 12)
							AND (`A`.`atr_comp_id` = 17)
							AND (
								`A`.`atr_nombre` = 'Market Status'
							)
						)
				) market
				on `market`.`id2` = `codigo`.`exp_id`
				LEFT JOIN (
					SELECT
						`E`.`exp_id` AS `id3`,
						`E`.`exp_valor` AS `Statuss`
					FROM
						(
							`crm_exp_expediente` `E`
							JOIN `crm_atr_atributo` `A` ON (
								(
									`A`.`atr_id` = `E`.`exp_atr_id`
								)
							)
						)
					WHERE
						(
							(`E`.`exp_cat_id` = 12)
							AND (`A`.`atr_comp_id` = 17)
							AND (`A`.`atr_nombre` = 'Status')
						)
				) statuss
				on `statuss`.`id3` = `codigo`.`exp_id`
				WHERE
					(
						(`market`.`Market` = 'Active')
						AND (
							`statuss`.`Statuss` = 'Publish Item'
						)
					)
				GROUP BY
					`agente`.`Agente`";
		return $sql;
	}
	public function getSqlNominaEmp(){
		$sql = "SELECT DISTINCTROW(`nombre`.`idEmpleado`) AS `idEmpleado`,
			concat(
				`nombre`.`nombre`,
				' ',
				`apellido`.`apellido`
			) AS `nombre`,
			`posicion`.`posicion` AS `posicion`,
			`descripcion`.`descripcion` AS `descripcion`,
			`email`.`email` AS `email`,
			`contact`.`contact` AS `contact`,
			IF (
			(
				isnull(`listings`.`cnListings`)
				OR (`listings`.`cnListings` = 0)
			),

			IF (
				(
					(
						`posicion`.`posicion` = 'Realtor'
					)
					OR (
						`posicion`.`posicion` = 'Broker/owner'
					)
					OR (
						`posicion`.`posicion` = 'REALTOR ®'
					)
				),
				'--',
				'-1'
			),
			 `listings`.`cnListings`
			) AS `listings`,
			concat(
				`documento`.`doc_ruta`,
				`documento`.`doc_nombre`
			) AS `rutaImg`,
			`short`.`shortDescrip` AS `shortDescription`,
			ucase(`nombre`.`nombre`) AS `simpleName`
		from (
			SELECT
				`exp`.`exp_id` AS `idEmpleado`,
				`exp`.`exp_valor` AS `nombre`,
				`exp`.`exp_com_id` AS `exp_com_id`,
				`exp`.`exp_cat_id` AS `exp_cat_id`
			FROM
				`crm_exp_expediente` `exp`
			WHERE
				(
					(`exp`.`exp_atr_id` = 4062)
					AND (`exp`.`exp_com_id` = 17)
					AND (`exp`.`exp_cat_id` = 2)
				)
		) nombre
		left join (
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `apellido`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4069
					)
					AND (
						`crm_exp_expediente`.`exp_cat_id` = 2
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) apellido 
		on apellido.idEmpleado = nombre.idEmpleado
		LEFT JOIN(
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `posicion`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4063
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) posicion
		on posicion.idEmpleado = nombre.idEmpleado
		LEFT JOIN(
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `descripcion`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4064
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) descripcion
		on descripcion.idEmpleado = nombre.idEmpleado
		left join (
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `email`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4066
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) email
		on email.idEmpleado = nombre.idEmpleado 
		LEFT JOIN(
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `phone`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4067
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) phone
		on phone.idEmpleado = nombre.idEmpleado
		LEFT JOIN (
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `contact`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 4065
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) contact
		on contact.idEmpleado = nombre.idEmpleado
		LEFT JOIN (
			-- ##########################
				SELECT
					`agente`.`Agente` AS `Agente`,
					count(`codigo`.`exp_id`) AS `cnListings`
				FROM
					(
						(
							(
								`schum_fl_codigo` `codigo`
								LEFT JOIN (
									-- #########################
									SELECT
											`E`.`exp_id` AS `id1`,
											`E`.`exp_valor` AS `Agente`
										FROM
											(
												`crm_exp_expediente` `E`
												JOIN `crm_atr_atributo` `A` ON (
													(
														`A`.`atr_id` = `E`.`exp_atr_id`
													)
												)
											)
										WHERE
											(
												(`E`.`exp_cat_id` = 12)
												AND (`A`.`atr_comp_id` = 17)
												AND (
													`A`.`atr_nombre` = 'Agent / Realtor ®'
												)
											)
									-- #########################
								) `agente` ON (
									(
										`agente`.`id1` = `codigo`.`exp_id`
									)
								)
							)
							LEFT JOIN (
								-- ##################################
									SELECT
										`E`.`exp_id` AS `id2`,
										`E`.`exp_valor` AS `Market`
									FROM
										(
											`crm_exp_expediente` `E`
											JOIN `crm_atr_atributo` `A` ON (
												(
													`A`.`atr_id` = `E`.`exp_atr_id`
												)
											)
										)
									WHERE
										(
											(`E`.`exp_cat_id` = 12)
											AND (`A`.`atr_comp_id` = 17)
											AND (
												`A`.`atr_nombre` = 'Market Status'
											)
										)
								-- ##################################
								) `market` ON (
								(
									`market`.`id2` = `codigo`.`exp_id`
								)
							)
						)
						LEFT JOIN (
								-- ############################
										SELECT
											`E`.`exp_id` AS `id3`,
											`E`.`exp_valor` AS `Statuss`
										FROM
											(
												`crm_exp_expediente` `E`
												JOIN `crm_atr_atributo` `A` ON (
													(
														`A`.`atr_id` = `E`.`exp_atr_id`
													)
												)
											)
										WHERE
											(
												(`E`.`exp_cat_id` = 12)
												AND (`A`.`atr_comp_id` = 17)
												AND (`A`.`atr_nombre` = 'Status')
											)
								-- ############################
							) `statuss` ON (
							(
								`statuss`.`id3` = `codigo`.`exp_id`
							)
						)
					)
				WHERE
					(
						(`market`.`Market` = 'Active')
						AND (
							`statuss`.`Statuss` = 'Publish Item'
						)
					)
				GROUP BY
					`agente`.`Agente`
			-- ##########################
		) listings	
		on listings.Agente = concat(`nombre`.`nombre`,' ',`apellido`.`apellido`)
		LEFT JOIN `crm_ambito` `ambito` 
		ON `ambito`.`amb_exp_id` = `nombre`.`idEmpleado`
		LEFT JOIN `crm_documento` `documento` 
		ON	`documento`.`doc_amb_id` = `ambito`.`amb_id`
		LEFT JOIN (
			SELECT
				`crm_exp_expediente`.`exp_id` AS `idEmpleado`,
				`crm_exp_expediente`.`exp_valor` AS `shortDescrip`
			FROM
				`crm_exp_expediente`
			WHERE
				(
					(
						`crm_exp_expediente`.`exp_atr_id` = 5158
					)
					AND (
						`crm_exp_expediente`.`exp_com_id` = 17
					)
				)
		) short
		ON short.idEmpleado = nombre.idEmpleado
		WHERE 
			concat(
				`documento`.`doc_ruta`,
				`documento`.`doc_nombre`
			) is not null";
		return $sql;
	}
	
	public function getSqlHouseListing(){
		$sql = "SELECT 
	streetNumber.exp_id as homeId,
	IF(videoTour.exp_valor IS NULL OR videoTour.exp_valor = '','#',videoTour.exp_valor) AS videoTour,
	CONCAT(
		streetNumber.exp_valor,
		' ',
		streetName.exp_valor,
		' ',
		type.exp_valor
		) AS `nombreVivienda`,
	IF (
		(
			isnull(`city`.`exp_valor`)
			OR (`city`.`exp_valor` = '')
		),
		'Sin asignar',
		`city`.`exp_valor`
	) AS `cityTown`,
	`list`.`exp_valor` AS `listPrice`,
	living.exp_valor AS `livingAreaFit`,
		IF (
		(
			isnull(`sqft`.`exp_valor`)
			OR (`sqft`.`exp_valor` = '')
		),
		'--',
		`sqft`.`exp_valor`
	) AS `sq`,
	IF (
		(
			isnull(`bed`.`exp_valor`)
			OR (`bed`.`exp_valor` = '')
		),
		'--',
		`bed`.`exp_valor`
	) AS `rooms`,
	schooldivision.exp_valor AS schooldivision
	,
	IF (
		(
			isnull(`bath`.`exp_valor`)
			OR (`bath`.`exp_valor` = '')
		),
		'--',
		`bath`.`exp_valor`
	) AS `bathroom`,
	concat(
		`documento`.`doc_ruta`,
		`documento`.`doc_nombre`
	) AS `rutaImg`,
	`type`.`exp_valor` AS `type`,
	`propertyType`.`exp_valor` AS `propertyType`,
		IF (
		(
			isnull(`video`.`exp_valor`)
			OR (`video`.`exp_valor` = '')
		),
		'null',
		`video`.`exp_valor`
	) AS `video`,
	IF (
		(
			isnull(`pdf`.`ruta`)
			OR (`pdf`.`ruta` = '')
		),
		'#',
		`pdf`.`ruta`
	) AS `pdfFeature`,
	`marketStatus`.`marketStatus` AS `marketStatus`,
	IF(`ubicacion`.`latitud` IS NULL,'',ubicacion.latitud) AS `latitud`,
	`ubicacion`.`longitud` AS `longitud`,
	`agent`.`agent` AS `agent`,
	`mls`.`mlsNumber` AS `mlsNumber`,
	`country`.`country` AS `country`,
	`yearBuilt`.`yearBuilt` AS `yearBuilt`,
	`streetName`.`listingDate` AS `listingDate`,
	`houseDescription`.`description` AS `description`,
	imagesHome.numFotos,
	`statusHome`.`exp_valor` AS `statusHome`
FROM (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3868
		)
) streetNumber
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 4668
		)
) schooldivision
on schooldivision.exp_id = streetNumber.exp_id 
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`,
		`crm_exp_expediente`.`exp_fecha_creacion` AS `listingDate`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3869
		)
)streetName
on streetNumber.exp_id = streetName.exp_id 
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3870
		)
) type
on type.exp_id = streetName.exp_id 
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 5329
		)
	
) videoTour
on videoTour.exp_id = streetName.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3875
		)
) city
on city.exp_id = streetNumber.exp_id
LEFT JOIN(
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3865
		)
) list
on list.exp_id = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 4007
		)
) sqft
on sqft.exp_id = list.exp_id 
left join(
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 5148
		)
) bed
on bed.exp_id = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 5149
		)
) bath
ON bath.exp_id = streetNumber.exp_id
LEFT JOIN (
	-- ##################
		SELECT *
		FROM (
		SELECT
			`amb`.`amb_exp_id` AS `amb_exp_id`,
			doc_id,
			`doc`.`doc_fecha_creacion` AS `doc_fecha_creacion`,
			`doc`.`doc_ruta` AS `doc_ruta`,
			`doc`.`doc_nombre` AS `doc_nombre`,
			`doc`.`doc_amb_id` AS `doc_amb_id`,
			`doc`.`doc_descripcion` AS `doc_descripcion`,
			doc.doc_orden
		FROM
			(
				`crm_documento` `doc`
				LEFT JOIN `crm_ambito` `amb` ON (
					(
						`amb`.`amb_id` = `doc`.`doc_amb_id`
					)
				)
			)
		WHERE
			(
				(`amb`.`amb_com_id` = 17)
				and `doc`.`doc_tipo` = 'image'

				
			)
			ORDER BY doc_orden
			
		) sliderProperty
		group by amb_exp_id 
	-- ##################
) documento
on documento.amb_exp_id = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3928
		)
) propertyType 
on propertyType.exp_id = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3946
		)
) video
on video.exp_id = streetNumber.exp_id 
LEFT JOIN (
	SELECT
		`streetNumber`.`exp_id` AS `homeId`,
		concat(
			`documento`.`doc_ruta`,
			`documento`.`doc_nombre`
		) AS `ruta`
	FROM
		(
			(
				`shum_tb_home_streetnumber` `streetNumber`
				LEFT JOIN `crm_ambito` `ambito` ON (
					(
						`ambito`.`amb_exp_id` = `streetNumber`.`exp_id`
					)
				)
			)
			LEFT JOIN `crm_documento` `documento` ON (
				(
					`documento`.`doc_amb_id` = `ambito`.`amb_id`
				)
			)
		)
	WHERE
		(
			`documento`.`doc_descripcion` = 'featuresheet'
		)
) pdf
on pdf.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`exp`.`exp_id` AS `exp_id`,
		`exp`.`exp_valor` AS `marketStatus`
	FROM
		`crm_exp_expediente` `exp`
	WHERE
		(
			(`exp`.`exp_atr_id` = 3778)
			AND (`exp`.`exp_com_id` = 17)
			AND (`exp`.`exp_cat_id` = 12)
		)
) marketStatus
on marketStatus.exp_id = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `exp_id`,
		`crm_exp_expediente`.`exp_valor` AS `exp_valor`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3777
		)
) statusHome
ON statusHome.exp_id = streetNumber.exp_id 
LEFT JOIN `crm_ubicaciones_maps` `ubicacion` 
ON `ubicacion`.`exp_id_fk` = `streetNumber`.`exp_id`
LEFT JOIN (
	SELECT DISTINCT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` AS `agent`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			(
				`crm_exp_expediente`.`exp_atr_id` = 3889
			)
			AND (
				`crm_exp_expediente`.`exp_com_id` = 17
			)
		)
) agent
on agent.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` AS `mlsNumber`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			(
				`crm_exp_expediente`.`exp_atr_id` = 3866
			)
			AND (
				`crm_exp_expediente`.`exp_com_id` = 17
			)
		)
) mls
on mls.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` AS `country`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			(
				`crm_exp_expediente`.`exp_atr_id` = 3873
			)
			AND (
				`crm_exp_expediente`.`exp_com_id` = 17
			)
		)
) country
ON country.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` AS `yearBuilt`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			(
				`crm_exp_expediente`.`exp_atr_id` = 3930
			)
			AND (
				`crm_exp_expediente`.`exp_com_id` = 17
			)
		)
) yearBuilt
on yearBuilt.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` AS `description`
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 3948
		)
) houseDescription
ON houseDescription.homeId = streetNumber.exp_id
LEFT JOIN (
	SELECT
		`crm_exp_expediente`.`exp_id` AS `homeId`,
		`crm_exp_expediente`.`exp_valor` 
	FROM
		`crm_exp_expediente`
	WHERE
		(
			`crm_exp_expediente`.`exp_atr_id` = 4007
		)
) living
ON living.homeId = streetNumber.exp_id 
lEFT JOIN (
	SELECT numImage.idVivienda,COUNT(numImage.idVivienda) AS numFotos
	FROM (
		SELECT DISTINCT
			`exp`.`exp_id` AS `idVivienda`,
			`documento`.`doc_nombre` AS `doc_nombre`
		FROM
			(
				(
					(
						`crm_documento` `documento`
						LEFT JOIN `crm_ambito` `ambito` ON (
							(
								`ambito`.`amb_id` = `documento`.`doc_amb_id`
							)
						)
					)
					LEFT JOIN `crm_exp_expediente` `exp` ON (
						(
							`exp`.`exp_id` = `ambito`.`amb_exp_id`
						)
					)
				)
				LEFT JOIN `crm_compania` `compania` ON (
					(
						`compania`.`com_id` = `exp`.`exp_com_id`
					)
				)
			)
		WHERE
			(
				(`compania`.`com_id` = 17)
				AND (`exp`.`exp_cat_id` = 12)
				AND (
					`documento`.`doc_tipo` = 'image'
				)
			)
) numImage
GROUP BY(numImage.idVivienda)
) imagesHome
on imagesHome.idVivienda = streetNumber.exp_id
where concat(
		`documento`.`doc_ruta`,
		`documento`.`doc_nombre`
	) is not null
			
			";
		return $sql;
	}
}
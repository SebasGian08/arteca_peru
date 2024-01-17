<?php 
	const BASE_URL = "http://localhost/arteca_peru";
	//const BASE_URL = "https://abelosh.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "bdarteca";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "SOLES";

	//Api PayPal
	//SANDBOX PAYPAL
	/* const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = ""; */
	//LIVE PAYPAL
	const URLPAYPAL = "https://api-m.paypal.com";
	const IDCLIENTE = "AenbHO7pPI7PEWitr-G7f0lWiuimXn6-xWwro0RsyyB-9Ov-Sd2SmgkjG8odkl8sBbSqhHYtXi7DlBnh";
	const SECRET = "EFFiuixcRFEZFl8Z3QVCgskMrFJfy6o4Wo1zFxar87DAIQ4i2G3Zyb33-Cp-KjhMQM1_Cl9aDjlooX9h";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@codware.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "Desarrollador por grupocodware";

	const DESCRIPCION = "";
	const SHAREDHASH = "Tienda Virtual";

	//Datos Empresa
	const DIRECCION = "Lima,Perú";
	const TELEMPRESA = "+51922183551";
	const WHATSAPP = "+51922183551";
	const EMAIL_EMPRESA = "grupocodware@gmail.com";
	const EMAIL_PEDIDOS = "grupocodware@gmail.com"; 
	const EMAIL_SUSCRIPCION = "grupocodware@gmail.com";
	const EMAIL_CONTACTO = "grupocodware@gmail.com";

	const CAT_SLIDER = "1,2,3"; //para el slider
	const CAT_BANNER = "4,5,6,7,8,9"; //para las categorias banners
	const CAT_FOOTER = "1,2,3,4,5"; //categorias footer

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 20;
	const PROPORPAGINA = 6;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/Codwareoficial";
	const INSTAGRAM = "https://www.instagram.com/grupocodware/";
	

 ?>
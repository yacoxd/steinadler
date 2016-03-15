<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @descripcion: Helper used to define the language interface
 * @author: Abner Tellez (GP360) 26-09-2013
 */
 
 
 	 if ( ! function_exists('order_and_filter_tables'))
	{
		
			function order_and_filter_tables($aColumns,$oColumns = NULL){
				if ($oColumns == NULL)
				$oColumns = $aColumns;
				
			/* 
			 * Paging
			 */
			$sLimit = "";
			if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
			{
				$sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
					intval( $_GET['iDisplayLength'] );
			}
		
		
			/*
			 * Ordering
			 */
			$sOrder = "";
			if ( isset( $_GET['iSortCol_0'] ) )
			{
				$sOrder = "ORDER BY  ";
				for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
				{
					if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
					{
						if (isset($oColumns[ intval( $_GET['iSortCol_'.$i] ) ])){
						$sOrder .= "`".$oColumns[ intval( $_GET['iSortCol_'.$i] ) ]."`".
							mysql_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";	
						}else{
						$sOrder = "";
						}
					
					}
				}
				
				$sOrder = substr_replace( $sOrder, "", -2 );
				
			
				if ( $sOrder == "ORDER BY")
				{
					$sOrder = "";
					
				}
			}
		
		
			/* 
			 * Filtering
			 * NOTE this does not match the built-in DataTables filtering which does it
			 * word by word on any field. It's possible to do here, but concerned about efficiency
			 * on very large tables, and MySQL's regex functionality is very limited
			 */
			
						 
			$sWhere = "";
			if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
			{
				
				
				
				$sWhere = "AND(";
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" )
					{
						$sWhere .= "`".$aColumns[$i]."` LIKE '%". ( $_GET['sSearch'] )."%' OR ";
					}
				}
				$sWhere = substr_replace( $sWhere, "", -3 );
				$sWhere .= ')';
			}
			
			/* Individual column filtering */
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
				{
					if ( $sWhere == "" )
					{
						$sWhere = " AND ";
					}
					else
					{
						$sWhere .= " AND ";
					}
					$sWhere .= "`".$aColumns[$i]."` LIKE '%". ($_GET['sSearch_'.$i])."%' ";
				} 
			}
			
			$data = array (
				'limit' => $sLimit,
				'order' => $sOrder,			
				'where' => $sWhere,
			);
			
			return ($data);
			
			
		}
		
		
		
	}
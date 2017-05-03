<?php


class signinCest
{
    public function _before(AcceptanceTester $I)
    {
		include('url.php');
    }

    public function _after(AcceptanceTester $I)
    {
		
    }

    // test cases
    public function tryToTest(AcceptanceTester $I)
    {
	
	// include('register.php'); #
	 // include('joingopage.php');
	include('signin.php'); #
	// include('finddeal.php');#
	// include('updateprofile.php'); #
	// include('myfavoritebusinesses.php'); #Claim a business is left for catch block#
	# include('editpswrd.php'); #
	// include('findbusmanually.php');
	// include('findbusbymap.php'); #
	// include('findbusbycat.php');#
	# include('proposedeal_member.php'); #
	// include('messages.php'); 
	// include('invitefriend.php'); #
	include('business_home.php');#
	// include('createoffer.php');#
	// include('offersanddeals.php');#
	// include('redeemrequest.php');#
	// include('mycustomers.php');#
	// include('messages.php');#
	// include('business_profileedit.php');#
	// include('business_gallery.php');#
	// include('socialmedia.php');#
	include('addbusman_singlelocation.php');#
	include('addbusman_multiplelocation.php');#
	
	
	// include('bus_hoursofopr.php');	
	
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    function showItem()
    {
        $items = Item::all() ;

        return view('index',['Items'=>$items]);
    }

    function addItem(Request $req)
    {
        $item = new Item;

        // asigning data to temporary variables
        echo $itemName = $req->input("ItemName");
        echo $itemDesc = $req->input("ItemDesc");
        
        // addigning form data values to table model object
        $item->ItemName = $itemName;
        $item->ItemDesc = $itemDesc;

        // insert query
        $item->save();

        // PACKUPP!
        $status = 'Item <b>'.$itemName.'</b> Added Successfully 👍';
        return redirect('/')->with('status', $status);
    }

    function deleteItem($id)
    {
        // Fetch data of $id to delete
        echo $item = Item::find($id); 

        // Delete Code
        if($item)
        {
            $itemName = $item->ItemName;
            $item->delete();

            // PACKUPP!
            $status = 'Item <b>'.$itemName.'</b> Deleted Successfully 👍';
            return redirect('/')->with('status', $status);
        }
        else
        {
            $error = "Item with id ".$id." doesn't exist";
            return redirect('/')->with('err', $error);
        }
    }

    function editItemForm($id)
    {
        $item = Item::find($id);
        return view('Edit',['item'=>$item]);
    }

    function editItem(Request $req, $id)
    {
        $newName = $req->ItemName;
        $newDesc = $req->ItemDesc;
        $item = Item::find($id);

        if($item)
        {
            $item->ItemName = $req->input('ItemName');
            $item->ItemDesc = $req->input('ItemDesc');
            $item->save();
            
            // PACKUPP!
            $status = 'Item <b>'.$item->ItemName.'</b> Updated Successfully 👍';
            return redirect('/')->with('status', $status);
        }
        else
        {
            $error = "Item with id ".$id." doesn't exist";
            return redirect('/')->with('err', $error);
        }

    }

    
}

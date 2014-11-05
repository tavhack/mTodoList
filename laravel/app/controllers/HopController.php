<?php
class HopController extends \BaseController {
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
     protected $layout = 'layouts.master';
     
    public function index() {
        $title = 'Hello';
        $data = array (
                'title' => $title,
                'id' => 10,
                'name' => 'Hop Vu',
                'skill' => 'PHP',
                'address' => 'Ho Chi Minh' 
        );
        
        return $this->layout->content = View::make ( "hop.index", $data );
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        echo 'dadada';
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id            
     * @return Response
     */
    public function show($id) {
        //
        return "Your ID: $id";
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id            
     * @return Response
     */
    public function edit($id) {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param int $id            
     * @return Response
     */
    public function update($id) {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id            
     * @return Response
     */
    public function destroy($id) {
        //
    }
}

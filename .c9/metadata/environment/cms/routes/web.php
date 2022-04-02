{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":26,"column":52},"end":{"row":26,"column":54},"action":"insert","lines":["{}"],"id":67}],[{"start":{"row":26,"column":53},"end":{"row":28,"column":0},"action":"insert","lines":["","    ",""],"id":68}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"remove","lines":[":"],"id":70}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"remove","lines":[":"],"id":71}],[{"start":{"row":23,"column":4},"end":{"row":41,"column":26},"action":"insert","lines":["//バリデーション","    $validator = Validator::make($request->all(), [","    'item_name' => 'required|max:255',","    ]);","    //バリデーション:エラー ","    if ($validator->fails()) {","    return redirect('/')","    ->withInput()","    ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）","    // Eloquent モデル","     $books = new Book;","     $books->item_name = $request->item_name;","     $books->item_number = '1';","     $books->item_amount = '1000';","     $books->published = '2017-03-07 00:00:00';","     $books->save(); ","     return redirect('/');"],"id":72}],[{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"remove","lines":["k"],"id":73},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"remove","lines":["o"]},{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"remove","lines":["o"]},{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"remove","lines":["b"]}],[{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"insert","lines":["p"],"id":74},{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"insert","lines":["o"]},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"insert","lines":["s"]},{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":36,"column":6},"end":{"row":36,"column":11},"action":"remove","lines":["books"],"id":75},{"start":{"row":36,"column":6},"end":{"row":36,"column":11},"action":"insert","lines":["posts"]}],[{"start":{"row":37,"column":6},"end":{"row":37,"column":11},"action":"remove","lines":["books"],"id":76},{"start":{"row":37,"column":6},"end":{"row":37,"column":11},"action":"insert","lines":["posts"]}],[{"start":{"row":38,"column":6},"end":{"row":38,"column":11},"action":"remove","lines":["books"],"id":77},{"start":{"row":38,"column":6},"end":{"row":38,"column":11},"action":"insert","lines":["posts"]}],[{"start":{"row":39,"column":6},"end":{"row":39,"column":11},"action":"remove","lines":["books"],"id":78},{"start":{"row":39,"column":6},"end":{"row":39,"column":11},"action":"insert","lines":["posts"]}],[{"start":{"row":40,"column":6},"end":{"row":40,"column":11},"action":"remove","lines":["books"],"id":79},{"start":{"row":40,"column":6},"end":{"row":40,"column":11},"action":"insert","lines":["posts"]}],[{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"remove","lines":["k"],"id":80},{"start":{"row":35,"column":20},"end":{"row":35,"column":21},"action":"remove","lines":["o"]},{"start":{"row":35,"column":19},"end":{"row":35,"column":20},"action":"remove","lines":["o"]},{"start":{"row":35,"column":18},"end":{"row":35,"column":19},"action":"remove","lines":["B"]}],[{"start":{"row":35,"column":18},"end":{"row":35,"column":19},"action":"insert","lines":["P"],"id":81},{"start":{"row":35,"column":19},"end":{"row":35,"column":20},"action":"insert","lines":["o"]},{"start":{"row":35,"column":20},"end":{"row":35,"column":21},"action":"insert","lines":["s"]},{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":["t"]}],[{"start":{"row":36,"column":21},"end":{"row":36,"column":22},"action":"remove","lines":["e"],"id":82},{"start":{"row":36,"column":20},"end":{"row":36,"column":21},"action":"remove","lines":["m"]},{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"remove","lines":["a"]},{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"remove","lines":["n"]},{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"remove","lines":["_"]},{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"remove","lines":["m"]},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"remove","lines":["e"]},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"remove","lines":["t"]},{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"remove","lines":["i"]}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["P"],"id":83},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["o"]},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["s"]}],[{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"remove","lines":["s"],"id":84},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"remove","lines":["o"]},{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"remove","lines":["P"]}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["p"],"id":85},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["o"]},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["s"]},{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":["t"]},{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"insert","lines":["_"]},{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"insert","lines":["t"]},{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"insert","lines":["i"]},{"start":{"row":36,"column":20},"end":{"row":36,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":36,"column":21},"end":{"row":36,"column":22},"action":"insert","lines":["l"],"id":86},{"start":{"row":36,"column":22},"end":{"row":36,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":36},"end":{"row":36,"column":45},"action":"remove","lines":["item_name"],"id":87},{"start":{"row":36,"column":36},"end":{"row":36,"column":37},"action":"insert","lines":["p"]},{"start":{"row":36,"column":37},"end":{"row":36,"column":38},"action":"insert","lines":["o"]},{"start":{"row":36,"column":38},"end":{"row":36,"column":39},"action":"insert","lines":["s"]},{"start":{"row":36,"column":39},"end":{"row":36,"column":40},"action":"insert","lines":["t"]}],[{"start":{"row":36,"column":36},"end":{"row":36,"column":40},"action":"remove","lines":["post"],"id":88},{"start":{"row":36,"column":36},"end":{"row":36,"column":46},"action":"insert","lines":["post_title"]}],[{"start":{"row":37,"column":13},"end":{"row":37,"column":31},"action":"remove","lines":["item_number = '1';"],"id":89},{"start":{"row":37,"column":13},"end":{"row":37,"column":47},"action":"insert","lines":["post_title = $request->post_title;"]}],[{"start":{"row":38,"column":13},"end":{"row":38,"column":34},"action":"remove","lines":["item_amount = '1000';"],"id":90},{"start":{"row":38,"column":13},"end":{"row":38,"column":47},"action":"insert","lines":["post_title = $request->post_title;"]}],[{"start":{"row":39,"column":13},"end":{"row":39,"column":47},"action":"remove","lines":["published = '2017-03-07 00:00:00';"],"id":91},{"start":{"row":39,"column":13},"end":{"row":39,"column":47},"action":"insert","lines":["post_title = $request->post_title;"]}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":23},"action":"remove","lines":["post_title"],"id":92},{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["c"]},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["a"]},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["t"]},{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":17},"action":"remove","lines":["cate"],"id":93},{"start":{"row":36,"column":13},"end":{"row":36,"column":21},"action":"insert","lines":["category"]}],[{"start":{"row":36,"column":34},"end":{"row":36,"column":44},"action":"remove","lines":["post_title"],"id":94},{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"insert","lines":["c"]},{"start":{"row":36,"column":35},"end":{"row":36,"column":36},"action":"insert","lines":["a"]}],[{"start":{"row":36,"column":34},"end":{"row":36,"column":36},"action":"remove","lines":["ca"],"id":95},{"start":{"row":36,"column":34},"end":{"row":36,"column":42},"action":"insert","lines":["category"]}],[{"start":{"row":38,"column":45},"end":{"row":38,"column":46},"action":"remove","lines":["e"],"id":96},{"start":{"row":38,"column":44},"end":{"row":38,"column":45},"action":"remove","lines":["l"]},{"start":{"row":38,"column":43},"end":{"row":38,"column":44},"action":"remove","lines":["t"]},{"start":{"row":38,"column":42},"end":{"row":38,"column":43},"action":"remove","lines":["i"]},{"start":{"row":38,"column":41},"end":{"row":38,"column":42},"action":"remove","lines":["t"]}],[{"start":{"row":38,"column":41},"end":{"row":38,"column":42},"action":"insert","lines":["b"],"id":97}],[{"start":{"row":38,"column":36},"end":{"row":38,"column":42},"action":"remove","lines":["post_b"],"id":98},{"start":{"row":38,"column":36},"end":{"row":38,"column":45},"action":"insert","lines":["post_body"]}],[{"start":{"row":38,"column":22},"end":{"row":38,"column":23},"action":"remove","lines":["e"],"id":99},{"start":{"row":38,"column":21},"end":{"row":38,"column":22},"action":"remove","lines":["l"]},{"start":{"row":38,"column":20},"end":{"row":38,"column":21},"action":"remove","lines":["t"]},{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"remove","lines":["i"]},{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"remove","lines":["t"]}],[{"start":{"row":38,"column":18},"end":{"row":38,"column":19},"action":"insert","lines":["b"],"id":100},{"start":{"row":38,"column":19},"end":{"row":38,"column":20},"action":"insert","lines":["o"]}],[{"start":{"row":38,"column":13},"end":{"row":38,"column":20},"action":"remove","lines":["post_bo"],"id":101},{"start":{"row":38,"column":13},"end":{"row":38,"column":22},"action":"insert","lines":["post_body"]}],[{"start":{"row":39,"column":22},"end":{"row":39,"column":23},"action":"remove","lines":["e"],"id":102},{"start":{"row":39,"column":21},"end":{"row":39,"column":22},"action":"remove","lines":["l"]},{"start":{"row":39,"column":20},"end":{"row":39,"column":21},"action":"remove","lines":["t"]},{"start":{"row":39,"column":19},"end":{"row":39,"column":20},"action":"remove","lines":["i"]},{"start":{"row":39,"column":18},"end":{"row":39,"column":19},"action":"remove","lines":["t"]},{"start":{"row":39,"column":17},"end":{"row":39,"column":18},"action":"remove","lines":["_"]},{"start":{"row":39,"column":16},"end":{"row":39,"column":17},"action":"remove","lines":["t"]},{"start":{"row":39,"column":15},"end":{"row":39,"column":16},"action":"remove","lines":["s"]},{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"remove","lines":["o"]},{"start":{"row":39,"column":13},"end":{"row":39,"column":14},"action":"remove","lines":["p"]}],[{"start":{"row":39,"column":13},"end":{"row":39,"column":14},"action":"insert","lines":["s"],"id":103},{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"insert","lines":["e"]},{"start":{"row":39,"column":15},"end":{"row":39,"column":16},"action":"insert","lines":["l"]},{"start":{"row":39,"column":16},"end":{"row":39,"column":17},"action":"insert","lines":["e"]},{"start":{"row":39,"column":17},"end":{"row":39,"column":18},"action":"insert","lines":["c"]}],[{"start":{"row":39,"column":18},"end":{"row":39,"column":19},"action":"insert","lines":["t"],"id":104}],[{"start":{"row":39,"column":13},"end":{"row":39,"column":19},"action":"remove","lines":["select"],"id":105},{"start":{"row":39,"column":13},"end":{"row":39,"column":24},"action":"insert","lines":["select_time"]}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"remove","lines":["e"],"id":106},{"start":{"row":39,"column":45},"end":{"row":39,"column":46},"action":"remove","lines":["l"]},{"start":{"row":39,"column":44},"end":{"row":39,"column":45},"action":"remove","lines":["t"]},{"start":{"row":39,"column":43},"end":{"row":39,"column":44},"action":"remove","lines":["i"]},{"start":{"row":39,"column":42},"end":{"row":39,"column":43},"action":"remove","lines":["t"]},{"start":{"row":39,"column":41},"end":{"row":39,"column":42},"action":"remove","lines":["_"]},{"start":{"row":39,"column":40},"end":{"row":39,"column":41},"action":"remove","lines":["t"]},{"start":{"row":39,"column":39},"end":{"row":39,"column":40},"action":"remove","lines":["s"]},{"start":{"row":39,"column":38},"end":{"row":39,"column":39},"action":"remove","lines":["o"]},{"start":{"row":39,"column":37},"end":{"row":39,"column":38},"action":"remove","lines":["p"]}],[{"start":{"row":39,"column":37},"end":{"row":39,"column":38},"action":"insert","lines":["s"],"id":107},{"start":{"row":39,"column":38},"end":{"row":39,"column":39},"action":"insert","lines":["e"]},{"start":{"row":39,"column":39},"end":{"row":39,"column":40},"action":"insert","lines":["l"]},{"start":{"row":39,"column":40},"end":{"row":39,"column":41},"action":"insert","lines":["e"]}],[{"start":{"row":39,"column":37},"end":{"row":39,"column":41},"action":"remove","lines":["sele"],"id":108},{"start":{"row":39,"column":37},"end":{"row":39,"column":48},"action":"insert","lines":["select_time"]}],[{"start":{"row":39,"column":49},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":109},{"start":{"row":40,"column":0},"end":{"row":40,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":40,"column":5},"end":{"row":40,"column":49},"action":"insert","lines":["$posts->select_time = $request->select_time;"],"id":110}],[{"start":{"row":40,"column":23},"end":{"row":40,"column":24},"action":"remove","lines":["e"],"id":111},{"start":{"row":40,"column":22},"end":{"row":40,"column":23},"action":"remove","lines":["m"]},{"start":{"row":40,"column":21},"end":{"row":40,"column":22},"action":"remove","lines":["i"]},{"start":{"row":40,"column":20},"end":{"row":40,"column":21},"action":"remove","lines":["t"]},{"start":{"row":40,"column":19},"end":{"row":40,"column":20},"action":"remove","lines":["_"]},{"start":{"row":40,"column":18},"end":{"row":40,"column":19},"action":"remove","lines":["t"]},{"start":{"row":40,"column":17},"end":{"row":40,"column":18},"action":"remove","lines":["c"]},{"start":{"row":40,"column":16},"end":{"row":40,"column":17},"action":"remove","lines":["e"]},{"start":{"row":40,"column":15},"end":{"row":40,"column":16},"action":"remove","lines":["l"]},{"start":{"row":40,"column":14},"end":{"row":40,"column":15},"action":"remove","lines":["e"]},{"start":{"row":40,"column":13},"end":{"row":40,"column":14},"action":"remove","lines":["s"]}],[{"start":{"row":40,"column":13},"end":{"row":40,"column":14},"action":"insert","lines":["c"],"id":112},{"start":{"row":40,"column":14},"end":{"row":40,"column":15},"action":"insert","lines":["o"]},{"start":{"row":40,"column":15},"end":{"row":40,"column":16},"action":"insert","lines":["v"]}],[{"start":{"row":40,"column":13},"end":{"row":40,"column":16},"action":"remove","lines":["cov"],"id":113},{"start":{"row":40,"column":13},"end":{"row":40,"column":22},"action":"insert","lines":["cover_img"]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":46},"action":"remove","lines":["select_time"],"id":114},{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["c"]},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"insert","lines":["o"]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":37},"action":"remove","lines":["co"],"id":115},{"start":{"row":40,"column":35},"end":{"row":40,"column":44},"action":"insert","lines":["cover_img"]}],[{"start":{"row":19,"column":4},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":116},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["$"],"id":117},{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"insert","lines":["p"]},{"start":{"row":19,"column":6},"end":{"row":19,"column":7},"action":"insert","lines":["o"]},{"start":{"row":19,"column":7},"end":{"row":19,"column":8},"action":"insert","lines":["s"]},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"insert","lines":["t"]},{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"insert","lines":[" "],"id":118},{"start":{"row":19,"column":11},"end":{"row":19,"column":12},"action":"insert","lines":["="]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":[" "],"id":119},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["P"]},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["o"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["t"],"id":120},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":[":"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":[":"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["o"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["r"]}],[{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["d"],"id":121},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["e"]},{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["r"]},{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["B"]}],[{"start":{"row":19,"column":25},"end":{"row":19,"column":26},"action":"insert","lines":["y"],"id":122}],[{"start":{"row":19,"column":26},"end":{"row":19,"column":28},"action":"insert","lines":["()"],"id":123}],[{"start":{"row":19,"column":27},"end":{"row":19,"column":29},"action":"insert","lines":["''"],"id":124}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["c"],"id":125},{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["r"]},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["e"]},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["a"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["t"]}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["e"],"id":126},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["d"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["_"]},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":["a"]},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":["t"]}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":[","],"id":127}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":[" "],"id":128}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":43},"action":"insert","lines":["''"],"id":129}],[{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["a"],"id":130},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["s"]},{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["c"]}],[{"start":{"row":19,"column":47},"end":{"row":19,"column":48},"action":"insert","lines":["-"],"id":131},{"start":{"row":19,"column":48},"end":{"row":19,"column":49},"action":"insert","lines":[">"]},{"start":{"row":19,"column":49},"end":{"row":19,"column":50},"action":"insert","lines":["g"]},{"start":{"row":19,"column":50},"end":{"row":19,"column":51},"action":"insert","lines":["e"]},{"start":{"row":19,"column":51},"end":{"row":19,"column":52},"action":"insert","lines":["t"]}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":54},"action":"insert","lines":["()"],"id":132}],[{"start":{"row":19,"column":54},"end":{"row":19,"column":55},"action":"insert","lines":[";"],"id":133}],[{"start":{"row":19,"column":55},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":134},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "],"id":135},{"start":{"row":19,"column":55},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["e"],"id":136},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"remove","lines":["m"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["o"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":["c"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"remove","lines":["l"]},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"remove","lines":["e"]},{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"remove","lines":["w"]}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":18},"action":"insert","lines":["p"],"id":137},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["o"]},{"start":{"row":20,"column":19},"end":{"row":20,"column":20},"action":"insert","lines":["s"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["s"],"id":138}],[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":[","],"id":139}],[{"start":{"row":20,"column":24},"end":{"row":20,"column":26},"action":"insert","lines":["[]"],"id":140}],[{"start":{"row":20,"column":25},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":141},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]},{"start":{"row":21,"column":8},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":12},"action":"insert","lines":["    "],"id":142}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":14},"action":"insert","lines":["''"],"id":143}],[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["p"],"id":144},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["o"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["s"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["t"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":[" "],"id":145},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["="]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":[">"]}],[{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":[" "],"id":146},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["$"]},{"start":{"row":21,"column":24},"end":{"row":21,"column":25},"action":"insert","lines":["p"]},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":["o"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["s"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["s"],"id":147}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":14},"action":"remove","lines":["item_name"],"id":148},{"start":{"row":28,"column":5},"end":{"row":28,"column":6},"action":"insert","lines":["p"]},{"start":{"row":28,"column":6},"end":{"row":28,"column":7},"action":"insert","lines":["o"]},{"start":{"row":28,"column":7},"end":{"row":28,"column":8},"action":"insert","lines":["s"]},{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"insert","lines":["t"]}],[{"start":{"row":28,"column":5},"end":{"row":28,"column":9},"action":"remove","lines":["post"],"id":149},{"start":{"row":28,"column":5},"end":{"row":28,"column":15},"action":"insert","lines":["post_title"]}],[{"start":{"row":43,"column":45},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":150},{"start":{"row":44,"column":0},"end":{"row":44,"column":5},"action":"insert","lines":["     "]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"insert","lines":["$"]},{"start":{"row":44,"column":6},"end":{"row":44,"column":7},"action":"insert","lines":["p"]},{"start":{"row":44,"column":7},"end":{"row":44,"column":8},"action":"insert","lines":["o"]},{"start":{"row":44,"column":8},"end":{"row":44,"column":9},"action":"insert","lines":["s"]}],[{"start":{"row":44,"column":9},"end":{"row":44,"column":10},"action":"insert","lines":["t"],"id":151},{"start":{"row":44,"column":10},"end":{"row":44,"column":11},"action":"insert","lines":["s"]},{"start":{"row":44,"column":11},"end":{"row":44,"column":12},"action":"insert","lines":["0"]}],[{"start":{"row":44,"column":11},"end":{"row":44,"column":12},"action":"remove","lines":["0"],"id":152}],[{"start":{"row":44,"column":11},"end":{"row":44,"column":12},"action":"insert","lines":["-"],"id":153},{"start":{"row":44,"column":12},"end":{"row":44,"column":13},"action":"insert","lines":[">"]},{"start":{"row":44,"column":13},"end":{"row":44,"column":14},"action":"insert","lines":["u"]}],[{"start":{"row":44,"column":14},"end":{"row":44,"column":15},"action":"insert","lines":["s"],"id":154},{"start":{"row":44,"column":15},"end":{"row":44,"column":16},"action":"insert","lines":["e"]},{"start":{"row":44,"column":16},"end":{"row":44,"column":17},"action":"insert","lines":["r"]},{"start":{"row":44,"column":17},"end":{"row":44,"column":18},"action":"insert","lines":["_"]}],[{"start":{"row":44,"column":18},"end":{"row":44,"column":19},"action":"insert","lines":["i"],"id":155},{"start":{"row":44,"column":19},"end":{"row":44,"column":20},"action":"insert","lines":["d"]}],[{"start":{"row":44,"column":20},"end":{"row":44,"column":21},"action":"insert","lines":[" "],"id":156},{"start":{"row":44,"column":21},"end":{"row":44,"column":22},"action":"insert","lines":["="]}],[{"start":{"row":44,"column":22},"end":{"row":44,"column":23},"action":"insert","lines":[" "],"id":157},{"start":{"row":44,"column":23},"end":{"row":44,"column":24},"action":"insert","lines":["A"]},{"start":{"row":44,"column":24},"end":{"row":44,"column":25},"action":"insert","lines":["u"]}],[{"start":{"row":44,"column":25},"end":{"row":44,"column":26},"action":"insert","lines":["t"],"id":158},{"start":{"row":44,"column":26},"end":{"row":44,"column":27},"action":"insert","lines":["h"]},{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"insert","lines":[";"]},{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"insert","lines":[";"]}],[{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"remove","lines":[";"],"id":159},{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"remove","lines":[";"]}],[{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"insert","lines":[":"],"id":160},{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"insert","lines":[":"]},{"start":{"row":44,"column":29},"end":{"row":44,"column":30},"action":"insert","lines":["i"]},{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":44,"column":31},"end":{"row":44,"column":33},"action":"insert","lines":["()"],"id":161}],[{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"insert","lines":[";"],"id":162}],[{"start":{"row":17,"column":0},"end":{"row":47,"column":3},"action":"remove","lines":["//一覧表示","Route::get('/', function () {","    $posts = Post::orderBy('created_at', 'asc')->get();","    return view('posts',[","            'posts' => $posts","        ]);","});","//追加","Route::post('/posts', function (Request $request){","    //バリデーション","    $validator = Validator::make($request->all(), [","    'post_title' => 'required|max:255',","    ]);","    //バリデーション:エラー ","    if ($validator->fails()) {","    return redirect('/')","    ->withInput()","    ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）","    // Eloquent モデル","     $posts = new Post;","     $posts->category = $request->category;","     $posts->post_title = $request->post_title;","     $posts->post_body = $request->post_body;","     $posts->select_time = $request->select_time;","     $posts->cover_img = $request->cover_img;","     $posts->user_id = Auth::id();","     $posts->save(); ","     return redirect('/');","});"],"id":163},{"start":{"row":17,"column":0},"end":{"row":21,"column":56},"action":"insert","lines":["//一覧表示","Route::get('/', [PostsController::class, 'index']);","","//登録処理","Route::post('posts', [PostsController::class, 'store']);"]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":40},"action":"insert","lines":["use App\\Http\\Controllers\\PostsController;","use App\\Http\\Controllers\\ImgController; "],"id":164}],[{"start":{"row":23,"column":0},"end":{"row":26,"column":3},"action":"remove","lines":["//削除","Route::delete('/post/{post}', function(Post $post){","    ","});"],"id":165},{"start":{"row":23,"column":0},"end":{"row":35,"column":61},"action":"insert","lines":["//更新画面","Route::get('/postsedit/{post}',[PostsController::class, 'edit']);","//更新処理","Route::post('posts/update',[PostsController::class, 'update']);","","//登録を削除","Route::delete('/post/{post}',[PostsController::class, 'destroy']);","","//画像アップロード画面表示","Route::get('/post', [PostsController::class,'index']);","","//画像アップロード処理","Route::post('/post/upload',[ImgController::class, 'upload']);"]}],[{"start":{"row":22,"column":56},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":166}],[{"start":{"row":25,"column":65},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":167}],[{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"insert","lines":["/"],"id":168}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":17,"column":0},"end":{"row":17,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":95,"mode":"ace/mode/php"}},"timestamp":1648821626162,"hash":"a7379078e6b666218c2b2dad85fb0472a6bb95d7"}
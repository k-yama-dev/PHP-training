// 汎用JSON取得関数
async function postData( argURL , argData ) {
    try {
        const response = await fetch(
            argURL , {
                method: 'POST' ,									// メソッドPOST
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify( argData ),					// JSONでパラメータを渡します。型は "Content-Type" ヘッダーと一致させる必要があります
            }
        ) ;
        if ( !response.ok ) {										// fetchのエラーチェック
            throw 'FETCH ERROR! HTTP Status:' + response.status ;	// fetchでエラーがあればエラーを投げる
        }
        const resData = await response.json() ;						// レスポンスデータのの取得
        return {													// データの取得状態(true)と取得したJSONデータを返します。
            status: true ,
            retData: resData ,
        } ;
    } catch( e ) {													// エラー処理
        return {													// データの取得状態(false)とエラー内容を返します。
            status: false ,
            retData: e ,
        } ;
    }
}
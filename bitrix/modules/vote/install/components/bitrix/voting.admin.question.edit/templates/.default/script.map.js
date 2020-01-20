{"version":3,"sources":["script.js"],"names":["exports","BX","namespace","answer","id","data","babelHelpers","classCallCheck","this","params","isNew","isSaved","MESSAGE","MESSAGE_TYPE","IMAGE_ID","FIELD_TYPE","FIELD_WIDTH","FIELD_HEIGHT","FIELD_PARAM","ACTIVE","C_SORT","COLOR","adjust","__apply","delegate","apply","__delete","delete","addCustomEvent","createClass","key","value","i","d","type","isPlainObject","hasOwnProperty","getId","getData","fromData","_delete","repo","getItem","item","entityType","values","valuesById","valuesByCode","forEach","proxy","current","push","toLowerCase","getByCode","code","getById","getIdByCode","answerTypes","setTypes","obj","getValues","isTextType","toUpperCase","substr","questionTypes","isCompatibilityMode","val","String","getActive","answerEditor","popup","reset","debug","onApply","formData","onCustomEvent","gridData","onCancel","onDelete","setGridData","gridInstanceId","gridId","maxSort","getGridId","setAnswer","show","showEditor","close","isTextMode","fieldType","htmlReg","join","message","util","htmlspecialchars","htmlText","substring","editorNode","create","attrs","className","html","ajax","prepareForm","isNotEmptyString","fired","addClass","PopupWindowManager","titleBar","autoHide","lightShadow","closeIcon","closeByEsc","zIndex","content","overlay","events","onPopupShow","onPopupClose","destroy","onAfterPopupShow","defer","focus","elements","bind","e","ctrlKey","altKey","keyCode","buttons","PopupWindowButton","text","click","adjustPosition","Vote","addTextAnswer","initEditor","addAnswer","answerData","editAnswer","rowId","grid","Main","gridManager","getInstanceById","answerPopupParams","getRows","getEditData","types","setParams","bindForm","document","metaKey","target","tagName","answerPopup","answerId","newRowData","clone","updateRow","addRow","window","args","formId","f","el","rows","ids","parseJSON","getNode","select","length","reloadTable","ID","action_button_grid_vote_answer","findChildren","props","name","form","getIndex","appendChild","func","prefix","depth","j","picker","showColorPicker","input","ColorPicker","bindElement","popupOptions","angle","open","selectedColor","onColorSelected","color"],"mappings":"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","file":"script.map.js"}
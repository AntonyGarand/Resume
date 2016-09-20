document.addEventListener('DOMContentLoaded',function(){
    var skills = document.querySelectorAll(".skillProgressBar");

    var nameModel = document.createElement("span");
    nameModel.setAttribute("class","skillName");

    var skillBarWrapperModel = document.createElement("span");
    skillBarWrapperModel.setAttribute("class","skillBarWrapper"); 

    var skillBlockModel = document.createElement("div");

    var skillValueModel = document.createElement("span");
    skillValueModel.setAttribute("class","skillValue"); 

    Array.from(skills).forEach(function(skill){
        var nameNode = nameModel.cloneNode(true);
        var skillBarWrapperNode = skillBarWrapperModel.cloneNode(true);
        var skillValueNode = skillValueModel.cloneNode(true);

        var name = skill.getAttribute("name");
        var value = skill.getAttribute("value");

        for(i=0;i<10;i++){
            var skillBlockNode = skillBlockModel.cloneNode(true);
            //Setting the class to "skillBlock 0 [active/inactive]" depending on if we're past the value or not.
            var classes = "skillBlock " + i + (i < value ? " active" : " inactive");
            skillBlockNode.setAttribute("class",classes);
            skillBarWrapperNode.appendChild(skillBlockNode);
        }
        nameNode.innerHTML = name;
        skillValueNode.innerHTML = value + "/10";
        
        skill.appendChild(nameNode);
        skill.appendChild(skillBarWrapperNode);
        skill.appendChild(skillValueNode);
    });
});

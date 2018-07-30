function OverTime(){
	th = this// for jquery selectors
	this.username = 'ariaz';
	this.password = 'Password1';
	this.report = null;
	this.reportContainer = "#overTimeWidget .chart";	
	this.breadCrumbContainer = "#overTimeWidget .breadcrumbs";	
	this.currentReport = 0;
	this.refreshinterval = 10000;//in ms
	this.reports = [{
		"path":"/public/Quartz/Dashboard_Widgets/Dispute_48/site",
		"params":{"hierarchy":[]},
		"onclick":managerReport,"load":siteReport,
		"breadcrumb":"","queryParam":null
		
	},
	{
		"path":"/public/Quartz/Dashboard_Widgets/Dispute_48/manager",
		"params":{"hierarchy":[],"location":null},
		"onclick":supervisorReport,"load":managerReport,
		"breadcrumb":"",
		"queryParam":null
	},
	{
		"path":"/public/Quartz/Dashboard_Widgets/Dispute_48/supervisor",
		"params":{"manager":null},
		"onclick":agentReport,"load":supervisorReport,
		"queryParam":null
	},
	{
		"path":"/public/Quartz/Dashboard_Widgets/Dispute_48/agents",
		"params":{"supervisor":null},
		"onclick":null,"load":agentReport,
		"queryParam":null
	},
	];
	
	
	function siteReport() {
		
		var params = {hierarchy:""};
		var tmp_managers = [];		
		if(this.hierarchy!=null){
			$.each(this.hierarchy,function(key,managers){				
				$.merge(tmp_managers,managers);
			});
		}
		this.reports[0].params["hierarchy"]= [tmp_managers.join("|")];
		this.reports[0].breadcrumb = "Site";
		
		this.report = fillReport(this.reportContainer,this.username,this.password,this.reports[0]["path"],this.reports[0].params,this.reports[0].onclick,this)
		
		this.currentReport = 0;
	}
	
	
	function managerReport(param){
		
		var site = param["Location_id"];		
		var tmp_managers = [];
		var hierarchy = $.merge(tmp_managers,this.hierarchy[site]).join("|");	
		this.reports[1].params["hierarchy"] = [hierarchy];
		this.reports[1].params["location"] = [site];
		this.reports[1].breadcrumb = "Manager";
		this.reports[1].queryParam = param;
		this.report = fillReport(this.reportContainer,this.username,this.password,this.reports[1]["path"],this.reports[1].params,this.reports[1].onclick,this)
		this.currentReport = 1;
	}
	
	function supervisorReport(param){
			var manager = param["manager"];	
			this.reports[2].params["manager"] = [manager];
			this.reports[2].breadcrumb = "Supervisor";
			this.reports[2].queryParam = param;
			this.report = fillReport(this.reportContainer,this.username,this.password,this.reports[2]["path"],this.reports[2].params,this.reports[2].onclick,this)
			this.currentReport = 2;
		}
	
	function agentReport(param){
		
		var supervisor = param["supervisor"];	
		this.reports[3].params["supervisor"] = [supervisor];	
		this.reports[3].breadcrumb = "Agent";
		this.reports[3].queryParam = param;
		this.report = fillReport(this.reportContainer,this.username,this.password,this.reports[3]["path"],this.reports[3].params,null,this)
		this.currentReport = 3;
	}
	
	this.sites = []
	this.hierarchy = {}
	
	this.load = function(sites,hierarchy){
		this.sites= sites;
		this.hierarchy = hierarchy;		
		siteReport.apply(this);
		
	}
	
	this.refresh = function(){

		th.reports[currentReport].load.apply(th,[th.reports[currentReport].queryParam]);
		setTimeout(			
				th.refresh, 
				th.refreshinterval);
	}
	
	
	
	this.fillBreadCrumb = function(){
		$(this.breadCrumbContainer).html("");
		for(var i=0;i<=this.currentReport;i++){
			var li = null;
			if(this.currentReport!=i){
				li = $("<li><a><span>"+this.reports[i].breadcrumb+"</span><span class='arrow'></span></li>")
			
			}else{
				li = $("<li><a><span>"+this.reports[i].breadcrumb+"</span></li>")
				
			}
			li.data("index",i);
			$(this.breadCrumbContainer).append(li)
		}
	}
	$(this.breadCrumbContainer).on("click","li",function(){
		var reportid = $(this).data("index");		
		console.info(th.reports[reportid].queryParam)
		th.reports[reportid].load.apply(th,[th.reports[reportid].queryParam]);		
	});
	setTimeout(			
			th.refresh, 
			th.refreshinterval);
}

$(document).ready(function(){
	window.overtime = window.overtime || new OverTime();
	
})
package bertonitv;

import javax.tv.locator.*;
import javax.tv.service.*;
import javax.tv.service.navigation.*;
import javax.tv.service.selection.*;
import javax.tv.xlet.*;

public class MarketTV
               implements Xlet, ServiceContextListener {
  ServiceContextFactory scf;
  ServiceContext sc;

  public void initXlet(XletContext context) {
    scf = ServiceContextFactory.getInstance();
    try{
      sc = scf.getServiceContext(context);
    } catch (Exception e) {}
  }

  public void pauseXlet() {}
  public void destroyXlet( boolean unconditional ) {}

  public void startXlet() {
    //If fail to get a service context at initXlet
    if(sc == null) {
      try{
        //Get all existing service contexts
        ServiceContext[] ctxs = scf.getServiceContexts();
        if(ctxs.length > 0) {
          sc = ctxs[0];
         } else {
           // none available, try to create one then.
           sc = scf.createServiceContext();
         }
      } catch (Exception e) {
        System.out.println(
		"Cannot obtain a valid ServiceContext: "
		+ e);
        return;
      }
    }

    // Add ServiceContextListener
    sc.addListener(this);

    //Get all available Services from SIManager
    ServiceList list = SIManager.createInstance().
		filterServices(null);
    //Iterate the list to tune
    for(int i = 0; i < list.size(); i++ ) {
      try{
        Service s = list.getService(i);
        System.out.println("selecting: "
		+ s.getName());
        sc.select(s);
        Thread.sleep(20000);
      } catch (Exception e) {
        System.out.println("selection failed: " + e);
      }
    }

    System.out.println("End of startXlet()");
  }

  //Invoked when selection completes
  public void receiveServiceContextEvent(
		ServiceContextEvent event) {
    //Selection success
    if(event instanceof PresentationChangedEvent) {
       Service currentService =
		event.getServiceContext().getService();
       System.out.println("Selection succeeded for: "
                + currentService.getName());
    //Selection terminated
    } else if (event instanceof
		PresentationTerminatedEvent) {
      int reason = ((PresentationTerminatedEvent)event).
		getReason();
      System.out.println(
		"Selection terminated with a reason: "
                + reason);
     //Selection failed
    } else if (event instanceof SelectionFailedEvent) {
      int reason = ((
		SelectionFailedEvent)event).getReason();
      System.out.println(
		"Selection failed with a reason: "
                 + reason);
    }
  }
}
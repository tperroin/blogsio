	
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
	
        $userManager = $this->container->get('fos_user.user_manager');

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
	
        $dispatcher = $this->container->get('event_dispatcher');
	
        $event = new FormEvent($form, $request);

        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
	
        $userManager->updateUser($user);
	
        if (null === $response = $event->getResponse()) {

            $response = $this->redirect('sonata_user_profile_show');

        }
	
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
	
        return $response;
 	 	
    }
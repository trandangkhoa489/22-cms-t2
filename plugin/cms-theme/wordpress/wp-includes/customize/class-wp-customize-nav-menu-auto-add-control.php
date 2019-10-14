ng" name="CompatibilityLayer" />
            <UserData>
              <HelpedUserEvent xmlns="http://www.microsoft.com/Windows/Diagnosis/PCA/events">
                <ApplicationName>%1</ApplicationName>
                <ApplicationVersion>%2</ApplicationVersion>
                <ExecutablePath>%3</ExecutablePath>
                <ScenarioId>%4</ScenarioId>
                <UserAction>%5</UserAction>
                <CompatibilityLayer>%6</CompatibilityLayer>
              </HelpedUserEvent>
            </UserData>
          </template>
          <template tid="tidPcaHelpedUserWithDeprecatedComponentEvent">
            <data inType="win:UnicodeString" name="ApplicationName" />
            <data inType="win:UnicodeString" name="ApplicationVersion" />
            <data inType="win:UnicodeString" name="ExecutablePath" />
            <data inType="win:UnicodeString" name="ScenarioId" />
            <data inType="win:UnicodeString" name="UserAction" />
            <data inType="win:UnicodeString" name="CompatibilityLayer" />
            <data inType="win:UnicodeString" name="DeprecatedCompon
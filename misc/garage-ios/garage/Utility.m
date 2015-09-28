//
//  Utility.m
//  garage
//
//  Created by Michael Bordelon on 9/27/15.
//  Copyright © 2015 Michael Bordelon. All rights reserved.
//

#import "Utility.h"

@implementation Utility

+(void)openGarage {
    NSURL *url = [NSURL URLWithString:@"http://bordelonapp.com/garage/o.php"];
    NSURLRequest *request = [NSURLRequest requestWithURL:url];

    NSURLResponse *response;
    NSError *error;
    //send it synchronous
    NSData *responseData = [NSURLConnection sendSynchronousRequest:request returningResponse:&response error:&error];
    NSString *responseString = [[NSString alloc] initWithData:responseData encoding:NSUTF8StringEncoding];
    // check for an error. If there is a network error, you should handle it here.
    if(!error)
    {
        //log response
        NSLog(@"OPEN");
    }
}

@end
